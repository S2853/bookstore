<?php
session_start();

// Check if user is logged in, otherwise redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username']; // Get the logged-in user's username
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Bookstore</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Best Sellers</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    <!-- Search Bar -->
<div class="search-bar">
    <input type="text" id="searchInput" placeholder="Search for books...">
</div>
    </header>

    <!-- Main Content -->
    <main>
        <section id="featured">
            <h2>Featured Books</h2>
            <div class="book-list">
                <div class="book-item">
                    <img src="images/mockingbird.jpg" alt="To Kill a Mockingbird">
                    <p><strong>To Kill a Mockingbird</strong></p>
                    <p>by Harper Lee</p>
                </div>
                <div class="book-item">
                    <img src="images/great-gatsby.jpg" alt="The Great Gatsby">
                    <p><strong>The Great Gatsby</strong></p>
                    <p>by F. Scott Fitzgerald</p>
                </div>
                <div class="book-item">
                    <img src="images/catcher.jpg" alt="The Catcher in the Rye">
                    <p><strong>The Catcher in the Rye</strong></p>
                    <p>by J.D. Salinger</p>
                </div>
                <div class="book-item">
                    <img src="images/1984.jpg" alt="1984">
                    <p><strong>1984</strong></p>
                    <p>by George Orwell</p>
                </div>
            </div>
        </section>        

        <section id="categories">
            <h2>Book Categories</h2>
            <ul>
                <li><a href="#">Fiction</a></li>
                <li><a href="#">Non-Fiction</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">History</a></li>
            </ul>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>Contact us: info@bookstore.com</p>
    </footer>
</body>
</html>


    <footer>
        <p>&copy; 2025 Bookstore</p>
    </footer>
</body>
</html>
