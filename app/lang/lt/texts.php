<?php 

return array(

 // client
 'organization' => 'Įmonė',
 'name' => 'Vardas',
 'website' => 'Internetinis puslapis',
 'work_phone' => 'Telefonas',
 'address' => 'Adresas',
 'address1' => 'Gatvė',
 'address2' => 'Kabinetas',
 'city' => 'Miestas',
 'state' => 'Valstija',
 'postal_code' => 'Pašto kodas',
 'country_id' => 'Šalis',
 'contacts' => 'Kontaktinė infromacija',
 'first_name' => 'Vardas',
 'last_name' => 'Pavardė',
 'phone' => 'Telefonas',
 'email' => 'El. paštas',
 'additional_info' => 'Papidoma Info',
 'payment_terms' => 'Apmokėjimo sąlygos',
 'currency_id' => 'Valiuta',
 'size_id' => 'Dydis',
 'industry_id' => 'Veiklos sritis',
 'private_notes' => 'Privatūs užrašai',

 // invoice
 'invoice' => 'Sąkaita faktūra',
 'client' => 'Klientas',
 'invoice_date' => 'Išrašymo data',
 'due_date' => 'Apmokėjimo Data',
 'invoice_number' => 'Serija ir Nr.',
 'invoice_number_short' => 'Nr.',
 'po_number' => 'PO Numeris',
 'po_number_short' => 'PO Nr.',
 'frequency_id' => 'Kaip dažnai',
 'discount' => 'Nuolaida',
 'taxes' => 'Mokesčiai',
 'tax' => 'PVM',
 'item' => 'Prekė',
 'description' => 'Aprašymas',
 'unit_cost' => 'Vnt. kaina',
 'quantity' => 'Kiekis',
 'line_total' => 'Suma',
 'subtotal' => 'Suma viso',
 'paid_to_date' => 'Apmokėta',
 'balance_due' => 'Apmokėti',
 'invoice_design_id' => 'Dizainas',
 'terms' => 'Sąlygos',
 'your_invoice' => 'Tavo sąskaitos',

 'remove_contact' => 'Pašalinti kontaktą',
 'add_contact' => 'Pridėti kontaktą',
 'create_new_client' => 'Sukurti naują klientą',
 'edit_client_details' => 'Redaguoti kliento informaciją',
 'enable' => 'Įgalinti',
 'learn_more' => 'Plačiau',
 'manage_rates' => 'Redaguoti įkainius',
 'note_to_client' => 'Pastaba klientui',
 'invoice_terms' => 'Sąskaitos sąlygos',
 'save_as_default_terms' => 'Išsaugoti sąlygas kaip standratrines',
 'download_pdf' => 'Atsisiųsti PDF',
 'pay_now' => 'Apmokėti dabar',
 'save_invoice' => 'Išsaugoti sąskaitą',
 'clone_invoice' => 'Kopijuoti sąskaitą',
 'archive_invoice' => 'Archyvuoti sąskaitą',
 'delete_invoice' => 'Ištrinti sąskaitą',
 'email_invoice' => 'Išsiųsti el. paštu sąskaitą',
 'enter_payment' => 'Įvesti apmokėjimą',
 'tax_rates' => 'Mokesčių įkainiai',
 'rate' => 'Įkainis',
 'settings' => 'Nustatymai',
 'enable_invoice_tax' => 'Įjungti <b>PVM mokesčius</b>',
 'enable_line_item_tax' => 'Įjungti <b>PVM mokesčius sumai</b>',

 // navigation
 'dashboard' => 'Darbastalis',
 'clients' => 'Klientai',
 'invoices' => 'Sąskaitos',
 'payments' => 'Mokėjimai',
 'credits' => 'Kreditai',
 'history' => 'Istorija',
 'search' => 'Paieška',
 'sign_up' => 'Prisijunk',
 'guest' => 'Svečias',
 'company_details' => 'Imonės informacija',
 'online_payments' => 'Online mokėjimai',
 'notifications' => 'Priminimai',
 'import_export' => 'Importas/Eksportas',
 'done' => 'Baigta',
 'save' => 'Saugoti',
 'create' => 'Kurti',
 'upload' => 'Įkelti',
 'import' => 'Importuoti',
 'download' => 'Atsiųsti',
 'cancel' => 'Atšaukti',
 'close' => 'Uždaryti',
 'provide_email' => 'Prašome pateikti galiojantį el. pašto adresą',
 'powered_by' => 'Energija teikia',
 'no_items' => 'Įrašų nėra',

  // recurring invoices
  'recurring_invoices' => 'Recurring Invoices',
  'recurring_help' => '<p>Automatically send clients the same invoices weekly, bi-monthly, monthly, quarterly or annually. </p>
        <p>Use :MONTH, :QUARTER or :YEAR for dynamic dates. Basic math works as well, for example :MONTH-1.</p>
        <p>Examples of dynamic invoice variables:</p>
        <ul>
          <li>"Gym membership for the month of :MONTH" => "Gym membership for the month of July"</li>
          <li>":YEAR+1 yearly subscription" => "2015 Yearly Subscription"</li>
          <li>"Retainer payment for :QUARTER+1" => "Retainer payment for Q2"</li>
        </ul>',

  // dashboard
  'in_total_revenue' => 'in total revenue',
  'billed_client' => 'billed client',
  'billed_clients' => 'billed clients',
  'active_client' => 'active client',
  'active_clients' => 'active clients',  
  'invoices_past_due' => 'Invoices Past Due',
  'upcoming_invoices' => 'Upcoming invoices',
  'average_invoice' => 'Average invoice',
  
  // list pages
  'archive' => 'Archive',
  'delete' => 'Delete',
  'archive_client' => 'Archive client',
  'delete_client' => 'Delete client',
  'archive_payment' => 'Archive payment',
  'delete_payment' => 'Delete payment',
  'archive_credit' => 'Archive credit',
  'delete_credit' => 'Delete credit',
  'show_archived_deleted' => 'Show archived/deleted',
  'filter' => 'Filter',
  'new_client' => 'New Client',
  'new_invoice' => 'New Invoice',
  'new_payment' => 'New Payment',
  'new_credit' => 'New Credit',
  'contact' => 'Contact',
  'date_created' => 'Date Created',
  'last_login' => 'Last Login',
  'balance' => 'Balance',
  'action' => 'Action',
  'status' => 'Status',
  'invoice_total' => 'Invoice Total',
  'frequency' => 'Frequency',
  'start_date' => 'Start Date',
  'end_date' => 'End Date',
  'transaction_reference' => 'Transaction Reference',
  'method' => 'Method',
  'payment_amount' => 'Payment Amount',
  'payment_date' => 'Payment Date',
  'credit_amount' => 'Credit Amount',
  'credit_balance' => 'Credit Balance',
  'credit_date' => 'Credit Date',
  'empty_table' => 'No data available in table',
  'select' => 'Select',
  'edit_client' => 'Edit Client',
  'edit_invoice' => 'Edit Invoice',

  // client view page
  'create_invoice' => 'Create Invoice',
  'enter_credit' => 'Enter Credit',
  'last_logged_in' => 'Last logged in',
  'details' => 'Details',
  'standing' => 'Standing',
  'credit' => 'Credit',
  'activity' => 'Activity',
  'date' => 'Date',
  'message' => 'Message',
  'adjustment' => 'Adjustment',
  'are_you_sure' => 'Are you sure?',

  // payment pages
  'payment_type_id' => 'Payment type',
  'amount' => 'Amount',

  // account/company pages
  'work_email' => 'Email',
  'language_id' => 'Language',
  'timezone_id' => 'Timezone',
  'date_format_id' => 'Date format',
  'datetime_format_id' => 'Date/Time Format',
  'users' => 'Users',
  'localization' => 'Localization',
  'remove_logo' => 'Remove logo',
  'logo_help' => 'Supported: JPEG, GIF and PNG. Recommended size: 200px width by 120px height',
  'payment_gateway' => 'Payment Gateway',
  'gateway_id' => 'Provider',
  'email_notifications' => 'Email Notifications',
  'email_sent' => 'Email me when an invoice is <b>sent</b>',
  'email_viewed' => 'Email me when an invoice is <b>viewed</b>',
  'email_paid' => 'Email me when an invoice is <b>paid</b>',
  'site_updates' => 'Site Updates',
  'custom_messages' => 'Custom Messages',
  'default_invoice_terms' => 'Set default invoice terms',
  'default_email_footer' => 'Set default email signature',
  'import_clients' => 'Import Client Data',
  'csv_file' => 'Select CSV file',
  'export_clients' => 'Export Client Data',
  'select_file' => 'Please select a file',
  'first_row_headers' => 'Use first row as headers',
  'column' => 'Column',
  'sample' => 'Sample',
  'import_to' => 'Import to',
  'client_will_create' => 'client will be created',
  'clients_will_create' => 'clients will be created',

  // application messages
  'created_client' => 'Successfully created client',
  'created_clients' => 'Successfully created :count clients',
  'updated_settings' => 'Successfully updated settings',
  'removed_logo' => 'Successfully removed logo',
  'sent_message' => 'Successfully sent message',
  'invoice_error' => 'Please make sure to select a client and correct any errors',
  'limit_clients' => 'Sorry, this will exceed the limit of :count clients',
  'payment_error' => 'There was an error processing your payment. Please try again later.',
  'registration_required' => 'Please sign up to email an invoice',
  'confirmation_required' => 'Please confirm your email address',

  'updated_client' => 'Successfully updated client',
  'created_client' => 'Successfully created client',
  'archived_client' => 'Successfully archived client',
  'archived_clients' => 'Successfully archived :count clients',
  'deleted_client' => 'Successfully deleted client',
  'deleted_clients' => 'Successfully deleted :count clients',

  'updated_invoice' => 'Successfully updated invoice',
  'created_invoice' => 'Successfully created invoice',
  'cloned_invoice' => 'Successfully cloned invoice',
  'emailed_invoice' => 'Successfully emailed invoice',
  'and_created_client' => 'and created client',
  'archived_invoice' => 'Successfully archived invoice',
  'archived_invoices' => 'Successfully archived :count invoices',
  'deleted_invoice' => 'Successfully deleted invoice',
  'deleted_invoices' => 'Successfully deleted :count invoices',

  'created_payment' => 'Successfully created payment',
  'archived_payment' => 'Successfully archived payment',
  'archived_payments' => 'Successfully archived :count payments',
  'deleted_payment' => 'Successfully deleted payment',
  'deleted_payments' => 'Successfully deleted :count payments',
  'applied_payment' => 'Successfully applied payment',

  'created_credit' => 'Successfully created credit',
  'archived_credit' => 'Successfully archived credit',
  'archived_credits' => 'Successfully archived :count credits',
  'deleted_credit' => 'Successfully deleted credit',
  'deleted_credits' => 'Successfully deleted :count credits',

  // Emails
  'confirmation_subject' => 'Invoice Ninja Account Confirmation',
  'confirmation_header' => 'Account Confirmation',
  'confirmation_message' => 'Please access the link below to confirm your account.',
  'invoice_subject' => 'New invoice from :account',
  'invoice_message' => 'To view your invoice for :amount, click the link below.',
  'payment_subject' => 'Payment Received',
  'payment_message' => 'Thank you for your payment of :amount.',
  'email_salutation' => 'Dear :name,',
  'email_signature' => 'Regards,',
  'email_from' => 'The InvoiceNinja Team',
  'user_email_footer' => 'To adjust your email notification settings please visit '.SITE_URL.'/company/notifications',
  'invoice_link_message' => 'To view your client invoice click the link below:',
  'notification_invoice_paid_subject' => 'Invoice :invoice was paid by :client',
  'notification_invoice_sent_subject' => 'Invoice :invoice was sent to :client',
  'notification_invoice_viewed_subject' => 'Invoice :invoice was viewed by :client',
  'notification_invoice_paid' => 'A payment of :amount was made by client :client towards Invoice :invoice.',
  'notification_invoice_sent' => 'The following client :client was emailed Invoice :invoice for :amount.',
  'notification_invoice_viewed' => 'The following client :client viewed Invoice :invoice for :amount.',  
  'reset_password' => 'You can reset your account password by clicking the following link:',
  'reset_password_footer' => 'If you did not request this password reset please email our support: ' . CONTACT_EMAIL,


  // Payment page
  'secure_payment' => 'Secure Payment',
  'card_number' => 'Card number',
  'expiration_month' => 'Expiration month',  
  'expiration_year' => 'Expiration year',
  'cvv' => 'CVV',
  
  // Security alerts
  'confide' => [
    'too_many_attempts' => 'Too many attempts. Try again in few minutes.',
    'wrong_credentials' => 'Incorrect email or password.',
    'confirmation' => 'Your account has been confirmed!',
    'wrong_confirmation' => 'Wrong confirmation code.',
    'password_forgot' => 'The information regarding password reset was sent to your email.',
    'password_reset' => 'Your password has been changed successfully.',
    'wrong_password_reset' => 'Invalid password. Try again',
  ],
  
  // Pro Plan
  'pro_plan' => [
    'remove_logo' => ':link to remove the Invoice Ninja logo by joining the Pro Plan',
    'remove_logo_link' => 'Click here',
  ],

  'logout' => 'Log Out',
  'sign_up_to_save' => 'Sign up to save your work',
  'agree_to_terms' =>'I agree to the Invoice Ninja :terms',
  'terms_of_service' => 'Terms of Service',
  'email_taken' => 'The email address is already registered',
  'working' => 'Working',
  'success' => 'Success',
  'success_message' => 'You have succesfully registered. Please visit the link in the account confirmation email to verify your email address.',
  'erase_data' => 'This will permanently erase your data.',
  'password' => 'Password',

  'pro_plan_product' => 'Pro Plan',
  'pro_plan_description' => 'One year enrollment in the Invoice Ninja Pro Plan.',
  'pro_plan_success' => 'Thanks for choosing Invoice Ninja\'s Pro plan!<p/>&nbsp;<br/>
                          <b>Next Steps</b><p/>A payable invoice has been sent to the email 
                          address associated with your account. To unlock all of the awesome 
                          Pro features, please follow the instructions on the invoice to pay 
                          for a year of Pro-level invoicing.<p/>
                          Can\'t find the invoice? Need further assistance? We\'re happy to help 
                          -- email us at contact@invoiceninja.com',

  'unsaved_changes' => 'You have unsaved changes',
  'custom_fields' => 'Custom fields',
  'company_fields' => 'Company Fields',
  'client_fields' => 'Client Fields',
  'field_label' => 'Field Label',
  'field_value' => 'Field Value',
  'edit' => 'Edit',
  'set_name' => 'Set your company name',
  'view_as_recipient' => 'View as recipient',

  // product management
  'product_library' => 'Product Library',
  'product' => 'Product',
  'products' => 'Products',
  'fill_products' => 'Auto-fill products',
  'fill_products_help' => 'Selecting a product will automatically <b>fill in the description and cost</b>',
  'update_products' => 'Auto-update products',
  'update_products_help' => 'Updating an invoice will automatically <b>update the product library</b>',
  'create_product' => 'Create Product',
  'edit_product' => 'Edit Product',
  'archive_product' => 'Archive Product',
  'updated_product' => 'Successfully updated product',
  'created_product' => 'Successfully created product',
  'archived_product' => 'Successfully archived product',  
  'pro_plan_custom_fields' => ':link to enable custom fields by joining the Pro Plan',

  'advanced_settings' => 'Advanced Settings',
  'pro_plan_advanced_settings' => ':link to enable the advanced settings by joining the Pro Plan',
  'invoice_design' => 'Invoice Design',
  'specify_colors' => 'Specify colors',
  'specify_colors_label' => 'Select the colors used in the invoice',

  'chart_builder' => 'Chart Builder',
  'ninja_email_footer' => 'Use :site to invoice your clients and get paid online for free!',
  'go_pro' => 'Go Pro',

  // Quotes
  'quote' => 'Quote',
  'quotes' => 'Quotes',
  'quote_number' => 'Quote Number',
  'quote_number_short' => 'Quote #',
  'quote_date' => 'Quote Date',
  'quote_total' => 'Quote Total',
  'your_quote' => 'Your Quote',
  'total' => 'Total',
  'clone' => 'Clone',

  'new_quote' => 'New Quote',
  'create_quote' => 'Create Quote',
  'edit_quote' => 'Edit Quote',
  'archive_quote' => 'Archive Quote',
  'delete_quote' => 'Delete Quote',
  'save_quote' => 'Save Quote',
  'email_quote' => 'Email Quote',
  'clone_quote' => 'Clone Quote',
  'convert_to_invoice' => 'Convert to Invoice',
  'view_invoice' => 'View Invoice',
  'view_client' => 'View Client',
  'view_quote' => 'View Quote',

  'updated_quote' => 'Successfully updated quote',
  'created_quote' => 'Successfully created quote',
  'cloned_quote' => 'Successfully cloned quote',
  'emailed_quote' => 'Successfully emailed quote',
  'archived_quote' => 'Successfully archived quote',
  'archived_quotes' => 'Successfully archived :count quotes',
  'deleted_quote' => 'Successfully deleted quote',
  'deleted_quotes' => 'Successfully deleted :count quotes',
  'converted_to_invoice' => 'Successfully converted quote to invoice',

  'quote_subject' => 'New quote from :account',
  'quote_message' => 'To view your quote for :amount, click the link below.',
  'quote_link_message' => 'To view your client quote click the link below:',
  'notification_quote_sent_subject' => 'Quote :invoice was sent to :client',
  'notification_quote_viewed_subject' => 'Quote :invoice was viewed by :client',
  'notification_quote_sent' => 'The following client :client was emailed Quote :invoice for :amount.',
  'notification_quote_viewed' => 'The following client :client viewed Quote :invoice for :amount.',  
  
  'session_expired' => 'Your session has expired.',

  'invoice_fields' => 'Invoice Fields',
  'invoice_options' => 'Invoice Options',
  'hide_quantity' => 'Hide quantity',
  'hide_quantity_help' => 'If your line items quantities are always 1, then you can declutter invoices by no longer displaying this field.',
  'hide_paid_to_date' => 'Hide paid to date',
  'hide_paid_to_date_help' => 'Only display the "Paid to Date" area on your invoices once a payment has been received.',

  'charge_taxes' => 'Charge taxes',
  'user_management' => 'User Management',
  'add_user' => 'Add User',
  'send_invite' => 'Send invitation',
  'sent_invite' => 'Successfully sent invitation',
  'updated_user' => 'Successfully updated user',
  'invitation_message' => 'You\'ve been invited by :invitor. ',
  'register_to_add_user' => 'Please sign up to add a user',
  'user_state' => 'State',
  'edit_user' => 'Edit User',
  'delete_user' => 'Delete User',
  'active' => 'Active',
  'pending' => 'Pending',
  'deleted_user' => 'Successfully deleted user',
  'limit_users' => 'Sorry, this will exceed the limit of ' . MAX_NUM_USERS . ' users',

  'confirm_email_invoice' => 'Are you sure you want to email this invoice?',
  'confirm_email_quote' => 'Are you sure you want to email this quote?',
  'confirm_recurring_email_invoice' => 'Recurring is enabled, are you sure you want this invoice emailed?',

  'cancel_account' => 'Cancel Account',
  'cancel_account_message' => 'Warning: This will permanently erase all of your data, there is no undo.',
  'go_back' => 'Go Back',

  'data_visualizations' => 'Data Visualizations',
  'sample_data' => 'Sample data shown',
  'hide' => 'Hide',
  'new_version_available' => 'A new version of :releases_link is available. You\'re running v:user_version, the latest is v:latest_version',
    
  'invoice_settings' => 'Invoice Settings',
  'invoice_number_prefix' => 'Invoice Number Prefix',
  'invoice_number_counter' => 'Invoice Number Counter',
  'quote_number_prefix' => 'Quote Number Prefix',
  'quote_number_counter' => 'Quote Number Counter',
  'share_invoice_counter' => 'Share invoice counter',
  'invoice_issued_to' => 'Invoice issued to',
  'invalid_counter' => 'To prevent a possible conflict please set either an invoice or quote number prefix',
  'mark_sent' => 'Mark sent',    
  

  'gateway_help_1' => ':link to sign up for Authorize.net.',
  'gateway_help_2' => ':link to sign up for Authorize.net.',
  'gateway_help_17' => ':link to get your PayPal API signature.',
  'gateway_help_23' => 'Note: use your secret API key, not your publishable API key.',
  'gateway_help_27' => ':link to sign up for TwoCheckout.',

  'more_designs' => 'More designs',
  'more_designs_title' => 'Additional Invoice Designs',
  'more_designs_cloud_header' => 'Go Pro for more invoice designs',
  'more_designs_cloud_text' => '',
  'more_designs_self_host_header' => 'Get 6 more invoice designs for just $20',
  'more_designs_self_host_text' => '',
  'buy' => 'Buy',
  'bought_designs' => 'Successfully added additional invoice designs',
  
  
);

