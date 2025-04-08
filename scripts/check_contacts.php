<?php
require_once __DIR__ . '/../config/database.php';

try {
    $stmt = $conn->query("SELECT * FROM contact_requests ORDER BY id DESC LIMIT 1");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($result) {
        echo "Последняя запись в базе:\n";
        print_r($result);
    } else {
        echo "В базе нет записей\n";
    }
} catch (PDOException $e) {
    echo "Ошибка при запросе к базе: " . $e->getMessage();
}
?>