<?php
    include 'connection.php';
    session_start();

    if(isset($_POST['submit-btn'])) {

        $filter_email = filter_var($_POST['email']);
        $email = mysqli_real_escape_string($conn, $filter_email);

        $filter_password = filter_var($_POST['password']);
        $password = mysqli_real_escape_string($conn, $filter_password);


        $query =    "SELECT users.user_id, users.Name, users.address, users.contact, users.email, users.password, department.department_name
                    FROM users
                    JOIN department ON users.department_id=department.department_id AND users.email='$email';";
                    
        $select_user = mysqli_query($conn, $query) or die('query failed');

        if(mysqli_num_rows($select_user)>0) {
            $row = mysqli_fetch_assoc($select_user);
            if($row['password'] == $password){
                if($row['department_name'] == 'admin') {
                    $_SESSION['admin_name'] = $row['name'];
                    $_SESSION['admin_email'] = $row['email'];
                    $_SESSION['admin_id'] = $row['id'];
                    header('location:admin_pannel.php');
                }
                else if($row['department_name'] == 'staff') {
                    $_SESSION['user_name'] = $row['name'];
                    $_SESSION['user_email'] = $row['email'];
                    $_SESSION['user_id'] = $row['id'];
                    header('location:admin_dashboard.php');
                }
            }
            else {
                $message[] = 'incorrect email or password';
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>

<body>
    <section class="form-container">
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '
                        <div class="message">
                            <span> ' . $message . ' </span>
                            <span class="icon" onclick="this.parentElement.remove()"> close </span>
                        </div>
                    ';
            }
        }

        ?>
        <form method="post">
            <h1>Login Now</h1>

            <div class="input-field">
                <label>Email</label><br>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="input-field">
                <label>Password</label><br>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            <input type="submit" name="submit-btn" value="login now" class="btn">
            <p>Don't have an account ? <a href="admin_register.php">register now</a></p>
        </form>
    </section>
</body>

</html>