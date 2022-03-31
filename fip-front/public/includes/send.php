<?php
//debugger in PHP, remove this after
// ini_set('display_errors', 1);

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json; charset=UTF-8');
$result = [];
$visitor_name = '';
$visitor_email = '';
$visitor_phone = '';
$visitor_location = '';
$visitor_position = '';
$visitor_message = '';

// 1. Check the submission -> Validate the data [Is there "non available" items?(danger or illegal stuff)]
// 4OOST["fistname]

if (isset($_POST['firstName'])) {
    $visitor_name = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['lastName'])) {
    $visitor_name .= ' '.filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['email'])) {
    $visitor_email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
}

if (isset($_POST['phone'])) {
    $visitor_phone = filter_var(htmlspecialchars($_POST['phone']), FILTER_SANITIZE_STRING);
}
if (isset($_POST['location'])) {
    $visitor_location = filter_var(htmlspecialchars($_POST['location']), FILTER_SANITIZE_STRING);
}
if (isset($_POST['position'])) {
    $visitor_position = filter_var(htmlspecialchars($_POST['position']), FILTER_SANITIZE_STRING);
}
if (isset($_POST['message'])) {
    $visitor_message = filter_var(htmlspecialchars($_POST['message']), FILTER_SANITIZE_STRING);
}

$results['name'] = $visitor_name;
$results['message'] = $visitor_message;

// 2. Prepare the email [Print out the lable and put on the package / Prepare the package in certain format]
$email_subject = 'Response MSF mail form';
$email_recipient = 'msf_ontario@gmail.com'; // MY Email, or AKA "To" email
$email_message= sprintf('Name: %s, Email: %s, Message: %s', $visitor_name, $visitor_email, $visitor_message);

$email_headers = array(
    "From"=>$visitor_email
);
// %s = place holder

// $email_message = sprint('Name: ');

// 3. Send out the email [Send out the package]
$email_result = mail($email_recipient, $email_subject, $email_message, $email_headers);
if($email_result) {
    $results['message'] = sprintf('Thank you for contacting us, %s. You will get a reply within 24 hours', $visitor_name);
}else{
    $results['message'] = sprintf('We are sorry but the email did not go through.');
}
echo json_encode($results);