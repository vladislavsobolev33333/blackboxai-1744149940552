<?php
require_once 'auth.php';
require_once __DIR__ . '/../../config/database.php';

if (!isset($_GET['id'])) {
    header('Location: tours.php');
    exit;
}

$tourId = (int)$_GET['id'];
$stmt = $conn->prepare("SELECT * FROM tours WHERE id = :id");
$stmt->execute([':id' => $tourId]);
$tour = $stmt->fetch();

if (!$tour) {
    header('Location: tours.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $price = (float)($_POST['price'] ?? 0);
    
    $imagePath = $tour['image_path'];
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Delete old image if exists
        if ($imagePath && file_exists(__DIR__ . '/../../' . $imagePath)) {
            unlink(__DIR__ . '/../../' . $imagePath);
        }
        
        $uploadDir = __DIR__ . '/../../assets/uploads/';
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $filename = uniqid() . '.' . $extension;
        $imagePath = 'assets/uploads/' . $filename;
        
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../' . $imagePath);
    }

    $stmt = $conn->prepare("UPDATE tours SET title = :title, description = :description, price = :price, image_path = :image_path WHERE id = :id");
    $stmt->execute([
        ':title' => $title,
        ':description' => $description,
        ':price' => $price,
        ':image_path' => $imagePath,
        ':id' => $tourId
    ]);
    
    header('Location: tours.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать тур - Админ-панель</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="bg-blue-800 text-white w-64 p-4">
            <h1 class="text-xl font-bold mb-6">Админ-панель</h1>
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="index.php" class="flex items-center p-2 rounded hover:bg-blue-700">
                            <i class="fas fa-tachometer-alt mr-2"></i> Дашборд
                        </a>
                    </li>
                    <li>
                        <a href="tours.php" class="flex items-center p-2 rounded hover:bg-blue-700">
                            <i class="fas fa-map-marked-alt mr-2"></i> Управление турами
                        </a>
                    </li>
                    <li>
                        <a href="requests.php" class="flex items-center p极速赛车开奖结果