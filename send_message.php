<?php
// Retrieve form data
$orderID = $_POST['order_id'];
$to = $_POST['to'];
$from = $_POST['from'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$transporter = $_POST['transporter'];
$price = $_POST['price'];
$message = $_POST['message'];

// Process the message and send it to the transporter
// Implement your logic here to send the message to the transporter
// You can use email, SMS, or any other means of communication

// Example: Sending an email to the transporter
$subject = "New Message from Manufacturer";
$body = "Order ID: $orderID\n";
$body .= "To: $to\n";
$body .= "From: $from\n";
$body .= "Quantity: $quantity\n";
$body .= "Address: $address\n";
$body .= "Transporter: $transporter\n";
$body .= "Price: $price\n";
$body .= "Message: $message\n";

$transporterEmail = ""; // Replace with the actual transporter's email address
$headers = "From: manufacturer@example.com"; // Replace with the actual manufacturer's email address

// Send the email
mail($transporterEmail, $subject, $body, $headers);

// Redirect the user to a confirmation page
header("Location: confirmation.html");
exit;
?>
