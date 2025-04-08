<?php
require_once 'auth.php';
require_once __DIR__ . '/../../config/database.php';

if (!isset($_GET['id'])) {
    header('Location: requests.php');
    exit;
}

$stmt = $conn->prepare("SELECT * FROM contact_requests WHERE id = :id");
$stmt->execute([':id' => $_GET['id']]);
$request = $stmt->fetch();

if (!$request) {
    header('Location: requests.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просмотр заявки - Админ-панель</title>
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
                        <a href="requests.php" class="flex items-center p-2 rounded hover:bg-blue-700">
                            <i class="fas fa-envelope mr-2"></i> Заявки
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" class="flex items-center p-2 rounded hover:bg-blue-700">
                            <i class="fas fa-sign-out-alt mr-2"></i> Выход
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <div class="flex-1 p-8">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold">Заявка #<?= $request['id'] ?></h2>
                    <a href="requests.php" class="text-blue-500 hover:text-blue-700">
                        <i class="fas fa-arrow-left mr-1"></i> Назад
                    </a>
                </div>
                
                <div class="space-y-4">
                    <div>
                        <h3 class="text-lg font-semibold">Имя</h3>
                        <p><?= htmlspecialchars($request['name']) ?></p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Email</h3>
                        <p><?= htmlspecialchars($request['email']) ?></p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Телефон</h3>
                        <p><?= htmlspecialchars($request['phone']) ?></p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Сообщение</h3>
                        <p><?= htmlspecialchars($request['message']) ?></p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold">Дата</h3>
                        <p><?= date('d.m.Y H:i', strtotime($request['created_at'])) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>