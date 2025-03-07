<?php
session_start();
require_once 'config\dbh.php'; // استدعاء كلاس الاتصال بقاعدة البيانات

// التحقق من أن المستخدم مسجل الدخول
if (!isset($_SESSION['user_id'])) {
    die("Error: User not logged in.");
}

$user_id = $_SESSION['user_id'];

try {
    // الاتصال بقاعدة البيانات باستخدام كلاس database
    $conn = database::getInstance();
    
    // استعلام جلب بيانات المستخدم
    $stmt = $conn->prepare("SELECT name, email FROM users WHERE user_id = :user_id");
    $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
    $stmt->execute();
    
    // جلب البيانات
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$user) {
        die("Error: User not found.");
    }
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">User Profile</h2>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h5>
                <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                <a href="index.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
