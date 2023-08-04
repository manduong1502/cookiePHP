<?php
session_start();

// Kiểm tra user đã đăng nhập
if (!isset($_COOKIE['user_info'])) {
    // Chuyển hướng đến trang đăng nhập
    header('Location: cookie.php');
    exit;
}

// Lấy dữ liệu của user từ cookie
$user_info = unserialize($_COOKIE['user_info']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user_info['username']); ?>!</h1>
    <p>Your email: <?php echo htmlspecialchars($user_info['email']); ?></p>
    <p>Your password is: <?php echo htmlspecialchars($user_info['password']); ?></p>
</body>
</html>