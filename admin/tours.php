<?php
require_once 'auth.php';
require_once __DIR__ . '/../../config/database.php';

// Check if tours table exists, create if not
$conn->exec("CREATE TABLE IF NOT EXISTS tours (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    description TEXT,
    price REAL,
    image_path TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)");

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $price = (float)($_POST['price'] ?? 0);
    
    // Handle file upload
    $imagePath = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = __DIR__ . '/../../assets/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $filename = uniqid() . '.' . $extension;
        $imagePath = 'assets/uploads/' . $filename;
        
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../' . $imagePath);
    }

    $stmt = $conn->prepare("INSERT INTO tours (title, description, price, image_path) VALUES (:title, :description, :price, :image_path)");
    $stmt->execute([
        ':title' => $title,
        ':description' => $description,
        ':price' => $price,
        ':image_path' => $imagePath
    ]);
    
    header('Location: tours.php');
    exit;
}

// Get all tours
$tours = $conn->query("SELECT * FROM tours ORDER BY created_at DESC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление турами - Админ-панель</title>
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
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-2xl font-bold mb-6">Добавить тур</h2>
                
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Название</label>
                        <input type="text" name="title" required class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Описание</label>
                        <textarea name="description" rows="3" class="w-full px-3 py-2 border rounded-lg"></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Цена</label>
                        <input type="number" name="price" step="0.01" class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Изображение</label>
                        <input type="file" name="image" accept="image/*" class="w-full px-3 py-2 border rounded-lg">
                    </div>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                        Добавить тур
                    </button>
                </form>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-2xl font-bold mb-6">Список туров</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($tours as $tour): ?>
                    <div class="border rounded-lg overflow-hidden">
                        <?php if ($tour['image_path']): ?>
                        <img src="/<?= htmlspecialchars($tour['image_path']) ?>" alt="<?= htmlspecialchars($tour['title']) ?>" class="w-full h-48 object-cover">
                        <?php endif; ?>
                        <div class="p-4">
                            <h3 class="text-xl font-semibold"><?= htmlspecialchars($tour['title']) ?></h3>
                            <p class="text-gray-600 mb-2"><?= htmlspecialchars($tour['description']) ?></p>
                            <p class="text-lg font-bold"><?= number_format($tour['price'], 2) ?> ₽</p>
                            <div class="mt-4 flex space-x-2">
                                <a href="tour_edit.php?id=<?= $tour['id'] ?>" class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i> Редактировать
                                </a>
                                <a href="tour_delete.php?id=<?= $tour['id'] ?>" class="text-red-500 hover:text-red-700" onclick="return confirm('Вы уверены?')">
                                    <i class="fas fa-trash"></i> Удалить
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>