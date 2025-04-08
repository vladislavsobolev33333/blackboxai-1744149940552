<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $course = htmlspecialchars($_POST['course']);

    // Email configuration
    $to = 'education@khakassia-tours.ru';
    $subject = 'Заявка на курс повышения квалификации';
    $body = "Имя: $name\nEmail: $email\nТелефон: $phone\nКурс: $course";
    $headers = "From: $email";

    // Save to file for demo purposes
    file_put_contents('qualification_requests.txt', $body . "\n\n", FILE_APPEND);

    // Redirect back with success message
    header('Location: qualification.php?success=1');
    exit;
} else {
    header('Location: qualification.php');
    exit;
}
?>