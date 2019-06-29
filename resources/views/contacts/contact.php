<?php
/*
 *  CONFIGURE EVERYTHING HERE
 */

// an email address that will be in the From field of the email.
$from = 'Demo contact form <demo@domain.com>';

// an email address that will receive the email with the output of the form
$sendTo = 'Demo contact form <demo@domain.com>';

// subject of the email
$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); 

// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

/*
 *  LET'S DO THE SENDING
 */

// if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(count($_POST) == 0) throw new \Exception('Form is empty');
            
    $emailText = "You have a new message from your contact form\n=============================\n";

    foreach ($_POST as $key => $value) {
        // If the field exists in the $fields array, include it in the email 
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    // Send email
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// else just display the message
else {
    echo $responseArray['message'];
}

/*
THIS FILE USES PHPMAILER INSTEAD OF THE PHP MAIL() FUNCTION
*/

require 'PHPMailer-master/PHPMailerAutoload.php';

/*
*  CONFIGURE EVERYTHING HERE
*/

// an email address that will be in the From field of the email.
$fromEmail = 'demo@domain.com';
$fromName = 'Demo contact form';

// an email address that will receive the email with the output of the form
$sendToEmail = 'demo@domain.com';
$sendToName = 'Demo contact form';

// subject of the email
$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');

// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later'; 

//emailtext html


$emailTextHtml = "<h1>You have a new message from your contact form</h1><hr>";
$emailTextHtml .= "<table>";

foreach ($_POST as $key => $value) {
    // If the field exists in the $fields array, include it in the email
    if (isset($fields[$key])) {
        $emailTextHtml .= "<tr><th>$fields[$key]</th><td>$value</td></tr>";
    }
}
$emailTextHtml .= "</table><hr>";
$emailTextHtml .= "<p>Have a nice day,<br>Best,<br>Ondrej</p>";

$mail = new PHPMailer;

$mail->setFrom($fromEmail, $fromName);
$mail->addAddress($sendToEmail, $sendToName); // you can add more addresses by simply adding another line with $mail->addAddress();
$mail->addReplyTo($from);

$mail->isHTML(true);

$mail->Subject = $subject;
$mail->msgHTML($emailTextHtml); // this will also create a plain-text version of the HTML email, very handy

if(!$mail->send()) {
    throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
}

// smtp credentials and server

$smtpHost = 'smtp.domain.com';
$smtpUsername = 'hello@domain.com';
$smtpPassword = 'PASSWORD';

$mail = new PHPMailer;

... - set from, recipient, message...

$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
$mail->Host = gethostbyname($smtpHost);

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
//We have configured this variable in the config section
$mail->Username = $smtpHost;

//Password to use for SMTP authentication
//We have configured this variable in the config section
$mail->Password = $smtpPassword;


if(!$mail->send()) {
    throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
}

mail($sendTo, $subject, $emailText, implode("\n", $headers));
mail('new@emailaddress.com', $subject, $emailText, implode("\n", $headers));

$mail->addAddress($sendToEmail, $sendToName);
$mail->addAddress('newemail@domain.com', 'Johnny');

$emailText = "You have a new message from your contact form\n=============================\n";

foreach ($_POST as $key => $value) {
    // If the field exists in the $fields array, include it in the email 
    if (isset($fields[$key])) {
        $emailText .= "$fields[$key]: $value\n";
    }
}

$emailText = "You have a new message from your contact form\n
=============================\n
Some more text\n
Name: $_POST[name]\n
Message: $_POST[message]\n
Add more form fields or custom text....";

$emailTextHtml = "<style type='text/css'>body {font-family: Roboto, sans-serif; font-size: 13px; }</style>"
$emailTextHtml .= "<body>";
$emailTextHtml .= "<h1>You have a new message from your contact form</h1><hr>";
$emailTextHtml .= "<table>";
$emailTextHtml .= "<tr><th>Some custom message</th><td>$_POST[name]</td>";
$emailTextHtml .= "<tr><th>Some custom stuff</th><td>$_POST[surname]</td>";
$emailTextHtml .= "<tr><th>...</th><td>....</td>";
$emailTextHtml .= "</table>";
$emailTextHtml .= "<p>Have a nice day,<br>Best,<br>Ondrej</p>";
$emailTextHtml .= "</body>";

// if requested by AJAX request return JSON response
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    ...
 }
 // else just display the message
 else {
    ...
 }

 if ($responseArray['type'] == 'success') {
    // success redirect

    header('Location: http://www.example.com/success.html');
}
else {
    //error redirect
    header('Location: http://www.example.com/error.html');
}