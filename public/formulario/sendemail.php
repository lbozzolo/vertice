<?php

// Define some constants
define( "RECIPIENT_NAME", "Vertice Digital" );
//define( "RECIPIENT_EMAIL", "fernando@verticedigital.com.ar" );
define( "RECIPIENT_EMAIL", "lucas@verticedigital.com.ar" );


// Read the form values
$success = false;
$senderName = isset( $_POST['name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name'] ) : "";
$senderLastname = isset( $_POST['last_name'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['last_name'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$phone = isset( $_POST['phone'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $phone && $message) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "De: " . $senderName . " <" . $senderEmail . ">";
  //$msgBody = " Telefono: " . $phone . " Mensaje: " . $message . "";
  $msgBody = " Telefono: ". $phone . " --- ";
  $msgBody .= " Mensaje: " . $message;
  $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  header('Location: /');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: /');
}

?>