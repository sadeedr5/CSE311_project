<?php
    include 'connection.php';
    if(isset($_POST['submit-btn'])) {
        $filter_name = filter_var($_POST['name']);
        $name = mysqli_real_escape_string($conn, $filter_name);

        $filter_email = filter_var($_POST['email']);
        $email = mysqli_real_escape_string($conn, $filter_email);

        $filter_address = filter_var($_POST['address']);
        $address = mysqli_real_escape_string($conn, $filter_address);

        $filter_contact = filter_var($_POST['phone']);
        $contact = mysqli_real_escape_string($conn, $filter_contact);

        $filter_password = filter_var($_POST['password']);
        $password = mysqli_real_escape_string($conn, $filter_password);

        $filter_cpassword = filter_var($_POST['cpassword']);
        $cpassword = mysqli_real_escape_string($conn, $filter_cpassword);

        $query = "SELECT * FROM users WHERE email = '$email'";

        $select_user = mysqli_query($conn, $query) or die('query failed');

        if(mysqli_num_rows($select_user)>0) {
            $message[] = 'user already exist';
        }
        else {
            if($password!=$cpassword) {
                $message[] = 'wrong password';
            }
            else {
                mysqli_query($conn, "INSERT INTO users (name, address, contact, email, password, department_id) VALUES ('$name', '$address', '$contact', '$email', '$password', 101)") or die('query_failed');
                $message[] = 'registered successfully';
                header('location:admin_login.php');
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <h1>Admin Registration</h1>
            <input type="text" name="name" placeholder="enter your name" required>
            <textarea type="text" name="address" placeholder="enter your address"></textarea>
            <input type="text" name="phone" placeholder="enter your contact">
            <input type="email" name="email" placeholder="enter your email" required>
            <input type="password" name="password" placeholder="enter your password" required>
            <input type="password" name="cpassword" placeholder="confirm your password" required>
            <input type="submit" name="submit-btn" value="register now" class="btn">
            <p>already have an account ? <a href="admin_login.php">login now</a></p>
        </form>
    </section>
</body>

</html>