<?php
require_once 'auth.php';
require_once __DIR__ . '/../../config/database.php';

// Pagination
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 10;
$offset = ($page - 1) * $perPage;

$total = $conn->query("SELECT COUNT(*) FROM contact_requests")->fetchColumn();
$totalPages = ceil($total / $perPage);

$stmt = $conn->prepare("SELECT * FROM contact_requests ORDER BY created_at DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$requests = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявки - Админ-панель</title>
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
                <h2 class="text-2xl font-bold mb-6">Заявки</h2>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">ID</th>
                                <th class="py-2 px-4 border-b">Имя</th>
                                <th class="py-2 px-4 border-b">Email</th>
                                <th class="py-2 px-4 border-b">Телефон</th>
                                <th class="py-2 px-4 border-b">Сообщение</th>
                                <th class="py-2 px-4 border-b">Дата</th>
                                <th class="py-2 px-4 border-b">Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($requests as $request): ?>
                            <tr>
                                <td class="py-2 px-4 border-b"><?= $request['id'] ?></td>
                                <td class="py-2 px-4 border-b"><?= htmlspecialchars($request['name']) ?></td>
                                <td class="py-2 px-4 border-b"><?= htmlspecialchars($request['email']) ?></td>
                                <td class="py-2 px-4 border-b"><?= htmlspecialchars($request['phone']) ?></td>
                                <td class="py-2 px-4 border-b"><?= htmlspecialchars($request['message']) ?></td>
                                <td class="py-2 px-4 border-b"><?= date('d.m.Y H:i', strtotime($request['created_at'])) ?></td>
                                <td class="py-2 px-4 border-b">
                                    <a href="request_view.php?id=<?= $request['id'] ?>" class="text-blue-500 hover:text-blue-700">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="flex justify-between items-center mt-4">
                    <div>
                        <?php if ($page > 1): ?>
                            <a href="?page=<?= $page - 1 ?>" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
                                Предыдущая
                            </a>
                        <?php endif; ?>
                    </div>
                    <div>
                        Страница <?= $page ?> из <?= $totalPages ?>
                    </div>
                    <div>
                        <?php if ($page < $totalPages): ?>
                            <a href="?page=<?= $page + 1 ?>" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
                                Следующая
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>