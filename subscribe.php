<?php
// Formspree subscription
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];
    $message = "Hey, I am interested in your oil and gas company. Please add me to the upcoming events or newsletter.";
    $subject = "Subscription Request";

    // Send email
    $to = "Operations@planetcare.work";
    $headers = "From: $email\r\n";
    mail($to, $subject, $message, $headers);
}

// Manual email submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['manual_email'])) {
    $email = $_POST['manual_email'];
    $message = "Hey, I am interested in your oil and gas company. Please add me to the upcoming events or newsletter.";
    $subject = "Subscription Request";

    // Send email
    $to = "Operations@planetcare.work";
    $headers = "From: $email\r\n";
    mail($to, $subject, $message, $headers);

    // Redirect back to the previous page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
?>
