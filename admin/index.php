<?php
require_once 'auth.php';
require_once __DIR__ . '/../../config/database.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
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
                <h2 class="text-2xl font-bold mb-6">Дашборд</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-blue-100 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800">Всего заявок</h3>
                        <p class="text-3xl font-bold">
                            <?php 
                            $stmt = $conn->query("SELECT COUNT(*) FROM contact_requests");
                            echo $stmt->fetchColumn();
                            ?>
                        </p>
                    </div>
                    <div class="bg-green-100 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-800">Новых заявок</h3>
                        <p class="text-3xl font-bold">
                            <?php 
                            $stmt = $conn->query("SELECT COUNT(*) FROM contact_requests WHERE created_at >= datetime('now', '-7 days')");
                            echo $stmt->fetchColumn();
                            ?>
                        </p>
                    </div>
                    <div class="bg-purple-100 p-4 rounded-lg">
                        <h3 class="font-semibold text-purple-800">Всего туров</h3>
                        <p class="text-3xl font-bold">
                            <?php 
                            $stmt = $conn->query("SELECT COUNT(*) FROM tours");
                            echo $stmt->fetchColumn();
                            ?>
                        </p>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-4">Последние заявки</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">Имя</th>
                                    <th class="py-2 px-4 border-b">Email</th>
                                    <th class="py-2 px-4 border-b">Телефон</th>
                                    <th class="py-2 px-4 border-b">Дата</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $stmt = $conn->query("SELECT * FROM contact_requests ORDER BY created_at DESC LIMIT 5");
                                while ($row = $stmt->fetch()):
                                ?>
                                <tr>
                                    <td class="py-2 px-4 border-b"><?= htmlspecialchars($row['name']) ?></td>
                                    <td class="py-2 px-4 border-b"><?= htmlspecialchars($row['email']) ?></td>
                                    <td class="py-2 px-4 border-b"><?= htmlspecialchars($row['phone']) ?></td>
                                    <td class="py-2 px-4 border-b"><?= date('d.m.Y H:i', strtotime($row['created_at'])) ?></td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>