<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $company = htmlspecialchars($_POST['company_name']);
    $contact = htmlspecialchars($_POST['contact_person']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email configuration
    $to = 'partners@khakassia-tours.ru';
    $subject = 'Запрос на сотрудничество';
    $body = "Компания: $company\nКонтактное лицо: $contact\nEmail: $email\nСообщение:\n$message";
    $headers = "From: $email";

    // Save to file for demo purposes
    file_put_contents('cooperation_requests.txt', $body . "\n\n", FILE_APPEND);

    // Redirect back with success message
    header('Location: cooperation.php?success=1');
    exit;
} else {
    header('Location: cooperation.php');
    exit;
}
?>