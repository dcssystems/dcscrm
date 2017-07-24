<?php
$msg = '';
//Don't run this unless we're handling a form submission
if ($_POST) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    date_default_timezone_set('America/Lima');

    require 'PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->Port = 25;

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('informes@dirconsolutions.com', $name);
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('informes@dirconsolutions.com', $name);
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($email, $name)) {
        $mail->Subject = 'Contáctenos Web www.dirconsolutions.com';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
                
            Nombre: {$name}
            Email: {$email}
            Mensaje: {$message}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.' . $mail->ErrorInfo;
        } else {
            $msg = 'success';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
echo $msg;