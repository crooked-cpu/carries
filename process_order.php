<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $deliveryDate = htmlspecialchars($_POST['deliveryDate']);
    $deliveryLocation = htmlspecialchars($_POST['deliveryLocation']);
    $paymentMethod = htmlspecialchars($_POST['paymentMethod']);

    // Email content
    $to = "tsotnejaniashvili@gmail.com"; // Replace with your email address
    $subject = "New Order Received";
    $message = "You have received a new order:\n\n";
    $message .= "Name: " . $firstName . " " . $lastName . "\n";
    $message .= "Delivery Date: " . $deliveryDate . "\n";
    $message .= "Delivery Location: " . $deliveryLocation . "\n";
    $message .= "Payment Method: " . $paymentMethod . "\n";

    // Sending the email
    $headers = "From: no-reply@example.com"; // Replace with your domain
    if (mail($to, $subject, $message, $headers)) {
        echo "Order submitted successfully!";
    } else {
        echo "Error submitting order.";
    }
}
?>
