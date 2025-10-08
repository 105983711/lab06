<?php include 'header.inc'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Form</h1>
    
    <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <p style="color: red;">Invalid username or password. Please try again.</p>
    <?php endif; ?>
    
    <form method="POST" action="process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        
        <input type="hidden" name="token" value="SJ25044839">
        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php include 'footer.inc'; ?>