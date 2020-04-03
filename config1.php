<?php 

define('PAYPAL_ID', 'sb-5f0ig1245727_api1.business.example.com'); 
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE 
 
define('PAYPAL_RETURN_URL', 'localhost/phpproject/success.php'); 
define('PAYPAL_CANCEL_URL', 'localhost/phpproject/cancel.php'); 
define('PAYPAL_NOTIFY_URL', 'localhost/phpproject/ipn.php'); 
define('PAYPAL_CURRENCY', 'USD'); 
 
// Database configuration 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'php_ecommerce'); 

// Change not required 
define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");