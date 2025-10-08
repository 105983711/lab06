<?php
session_start();

if (isset($_SESSION['user'])) {
    include 'header.inc';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
    <p><strong>Session Information:</strong></p>
    <ul>
        <li>Username: <?php echo htmlspecialchars($_SESSION['user']); ?></li>
        <li>User Token: <?php echo htmlspecialchars($_SESSION['token']); ?></li>
    </ul>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
<?php 
    include 'footer.inc';
} else {
    header('Location: login.php');
    exit();
}
?>