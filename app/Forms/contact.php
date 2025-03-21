<?php

$receiving_email_address = 'contact@exameple.com';

if( file_exists($php_email_form = __DIR__ . '/../../assets/vendor/php-email-form/php-email-form.php')) {
    include( $php_email_form);
} else {
    die( 'Impossivel de carregar o PHP Email Form library');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

$contact->add_message( $_POST['name'], 'From');
$contact->add_message( $_POST['email'], 'Email');
$contact->add_message( $_POST['message'], 'Message', 10);

echo $contact->send();

?>