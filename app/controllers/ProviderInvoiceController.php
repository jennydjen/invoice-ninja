<?php

/**
 * Le controlleur pour les factures de fournisseur
 * @author Jennifer Chaignepain
 */
class ProviderInvoiceController extends InvoiceController {

    /**
     * Surcharge de la méthode pour forcer la facture a être considérer comme facture fournisseur
     * @param type $clientPublicId : Id du client
     * @param type $provider : true si c'est une facture fournisseur
     * @return La vue correspondante
     */
    public function create($clientPublicId = 0, $provider = true) {
        return parent::create($clientPublicId, $provider);
    }

    /**
     * Surcharge de la méthode pour appeler la méthode save de cette classe
     * @return La vue correspondante
     */
    public function store() {
        return ProviderInvoiceController::save();
    }

    /**
     * Surcharge de la méthode pour forcer la facture a être considérer comme facture fournisseur
     * @param type $publicId : Id de la facture
     * @param type $provider : true si c'est une facture fournisseur
     * @return La vue correspondante
     */
    protected function save($publicId = null, $provider = true) {
        return parent::save($publicId, $provider);
    }

}
