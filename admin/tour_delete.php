<?php
require_once 'auth.php';
require_once __DIR__ . '/../../config/database.php';

if (!isset($_GET['id'])) {
    header('Location: tours.php');
    exit;
}

$tourId = (int)$_GET['id'];

// Get tour info to delete image
$stmt = $conn->prepare("SELECT image_path FROM tours WHERE id = :id");
$stmt->execute([':id' => $tourId]);
$tour = $stmt->fetch();

if ($tour) {
    // Delete image file if exists
    if ($tour['image_path'] && file_exists(__DIR__ . '/../../' . $tour['image_path'])) {
        unlink(__DIR__ . '/../../' . $tour['image_path']);
    }
    
    // Delete from database
    $stmt = $conn->prepare("DELETE FROM tours WHERE id = :id");
    $stmt->execute([':id' => $tourId]);
}

header('Location: tours.php');
exit;
?>