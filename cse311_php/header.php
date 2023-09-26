<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="flex">
            <a href="admin_panel.php" class="logo"><img src=""></a>
            <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about us</a>
            <a href="shop.php">shop</a>
            <a href="order.php">order</a>
            <a href="contact.php">contact</a>
            </nav>
            <div class="icons">
            <i class="bi bi-person" id="user-btn"></i>
            <a href="wishlist.php"><i class="bi bi-heart"></i></a>
            <a href="cart.php"><i class="bi bi-cart"></i></a>
            <i class="bi bi-list" id="menu-btn"></i>
            </div>
            <div class="user-box">
            <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>                
            <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <form method="post">
                <button type="submit" name="logout" class="logout-btn">log out</button>
            </form>
            </div>
        </div>
    </header>
    
</body>
</html>