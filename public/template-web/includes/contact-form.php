<?php

$string = file_get_contents("config.json");
$option = json_decode($string);

define("MAIL_HOST", $option->MAIL_HOST);
define("MAIL_TITLE", $option->MAIL_TITLE);

if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = nl2br($_POST['msg']);
    if (MAIL_HOST != null) {
        $to = MAIL_HOST;
    } else {
        $to = "contacto@amghi.com.ar";
    }
    $from = $email;
    if (MAIL_TITLE != null) {
        $subject = MAIL_TITLE;
    } else {
        $subject = '[] Mensaje de formulario de contacto';
    }
    $message = '<b>Name:</b> '.$name.' <br><b>Email:</b> '.$email.' <br><b>Phone:</b> '.$phone.' <br>  <p>'.$msg.'</p>';
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    if( mail($to, $subject, $message, $headers) ) {
        $serialized_data = '{"type":"success", "message":"Formulario de contacto enviado correctamente. Gracias, te responderé pronto!"}';
        echo $serialized_data;
    } else {
        $serialized_data = '{"type":"error", "message":"El formulario de contacto falló. Por favor envíe de nuevo más tarde!"}';
        echo $serialized_data;
    }
};
