<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Store user in session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header("Location: index.php"); // Redirect to homepage
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Username not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Bookstore</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Best Sellers</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <label for="username">Username</label><br>
            <input type="text" name="username" required><br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" required><br><br>
            <button type="submit">Login</button>
        </form>
        <br>
        <a href="register.php">Don't have an account? Register</a>
    </main>

    <footer>
        <p>&copy; 2025 Bookstore</p>
    </footer>
</body>
</html>
