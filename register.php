<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $email = $_POST['email'];

    // Check if username already exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);

    if ($stmt->rowCount() > 0) {
        echo "Username already taken!";
    } else {
        // Insert user data into database
        $stmt = $pdo->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
        $stmt->execute(['username' => $username, 'password' => $password, 'email' => $email]);

        echo "Registration successful! You can now log in.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
        <h1>Register</h1>
        <form method="POST" action="register.php">
            <label for="username">Username</label><br>
            <input type="text" name="username" required><br><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" required><br><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" required><br><br>
            <button type="submit">Register</button>
        </form>
        <br>
        <a href="login.php">Already have an account? Login</a>
    </main>

    <footer>
        <p>&copy; 2025 Bookstore</p>
    </footer>
</body>
</html>
