<?php 

/* 
POST /email
{
    to: 'test@email.com',
    subject: 'Test subject',
    message: '.....'
} 
Response
{
    status: 'OK/FAIL',
}
*/

$to = $_POST["to"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mail = mail($to, $subject, $message);

$request = array(
    'to' => $to,
    'subject' => $subject,
    'message' => $message
);

$response = array(
    'status' => $mail,
    'request' => $request,
);

echo(json_encode($response));

?>