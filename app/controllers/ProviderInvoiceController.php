<?php

/**
 * Le controlleur pour les factures de fournisseur
 */
class ProviderInvoiceController extends InvoiceController {

    public function create($clientPublicId = 0) {
        $client = null;
        $invoiceNumber = Auth::user()->account->getNextInvoiceNumber();
        $account = Account::with('country')->findOrFail(Auth::user()->account_id);

        if ($clientPublicId) {
            $client = Client::scope($clientPublicId)->firstOrFail();
        }

        $data = array(
            'entityType' => ENTITY_INVOICE,
            'account' => $account,
            'invoice' => null,
            'data' => Input::old('data'),
            'invoiceNumber' => $invoiceNumber,
            'method' => 'POST',
            'url' => 'invoices/provider',
            'title' => trans('texts.new_invoice'),
            'client' => $client);
        $data = array_merge($data, self::getViewModel());

        return View::make('invoices.edit', $data);
    }

    public function store() {
        return ProviderInvoiceController::save();
    }

    private function save($publicId = null) {
        $action = Input::get('action');
        $entityType = Input::get('entityType');

        if ($action == 'archive' || $action == 'delete' || $action == 'mark') {
            return ProviderInvoiceController::bulk($entityType);
        }

        $input = json_decode(Input::get('data'));

        $invoice = $input->invoice;

        if ($errors = $this->invoiceRepo->getErrors($invoice)) {
            Session::flash('error', trans('texts.invoice_error'));

            return Redirect::to("{$entityType}s/provider/create")
                            ->withInput()->withErrors($errors);
        } else {
            $this->taxRateRepo->save($input->tax_rates);

            $clientData = (array) $invoice->client;
            $client = $this->clientRepo->save($invoice->client->public_id, $clientData);

            $invoiceData = (array) $invoice;
            $invoiceData['client_id'] = $client->id;
            $invoiceData['provider'] = true;
            $invoice = $this->invoiceRepo->save($publicId, $invoiceData, $entityType);

            $account = Auth::user()->account;
            if ($account->invoice_taxes != $input->invoice_taxes || $account->invoice_item_taxes != $input->invoice_item_taxes || $account->invoice_design_id != $input->invoice->invoice_design_id) {
                $account->invoice_taxes = $input->invoice_taxes;
                $account->invoice_item_taxes = $input->invoice_item_taxes;
                $account->invoice_design_id = $input->invoice->invoice_design_id;
                $account->save();
            }

            $client->load('contacts');
            $sendInvoiceIds = [];

            foreach ($client->contacts as $contact) {
                if ($contact->send_invoice || count($client->contacts) == 1) {
                    $sendInvoiceIds[] = $contact->id;
                }
            }

            foreach ($client->contacts as $contact) {
                $invitation = Invitation::scope()->whereContactId($contact->id)->whereInvoiceId($invoice->id)->first();

                if (in_array($contact->id, $sendInvoiceIds) && !$invitation) {
                    $invitation = Invitation::createNew();
                    $invitation->invoice_id = $invoice->id;
                    $invitation->contact_id = $contact->id;
                    $invitation->invitation_key = str_random(RANDOM_KEY_LENGTH);
                    $invitation->save();
                } else if (!in_array($contact->id, $sendInvoiceIds) && $invitation) {
                    $invitation->delete();
                }
            }

            $message = trans($publicId ? "texts.updated_{$entityType}" : "texts.created_{$entityType}");
            if ($input->invoice->client->public_id == '-1') {
                $message = $message . ' ' . trans('texts.and_created_client');

                $url = URL::to('clients/' . $client->public_id);
                Utils::trackViewed($client->getDisplayName(), ENTITY_CLIENT, $url);
            }

            if ($action == 'clone') {
                return $this->cloneInvoice($publicId);
            } else if ($action == 'convert') {
                return $this->convertQuote($publicId);
            } else if ($action == 'email') {
                if (Auth::user()->confirmed && !Auth::user()->isDemo()) {
                    $message = trans("texts.emailed_{$entityType}");
                    $this->mailer->sendInvoice($invoice);
                    Session::flash('message', $message);
                } else {
                    $errorMessage = trans(Auth::user()->registered ? 'texts.confirmation_required' : 'texts.registration_required');
                    Session::flash('error', $errorMessage);
                    Session::flash('message', $message);
                }
            } else {
                Session::flash('message', $message);
            }

            $url = "{$entityType}s/provider/" . $invoice->public_id . '/edit';
            return Redirect::to($url);
        }
    }

}
