<?php
    include 'connection.php';
    if(isset($_POST['submit-btn'])) {
        $filter_name = filter_var($_POST['name']);
        $name = mysqli_real_escape_string($conn, $filter_name);

        $filter_address = filter_var($_POST['address']);
        $address = mysqli_real_escape_string($conn, $filter_address);

        $filter_contact = filter_var($_POST['phone']);
        $contact = mysqli_real_escape_string($conn, $filter_contact);

        $filter_email = filter_var($_POST['email']);
        $email = mysqli_real_escape_string($conn, $filter_email);

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
                mysqli_query($conn, "INSERT INTO users (name, address, contact, email, password, department_id) VALUES ('$name', '$address', '$contact', '$email', '$password', '101')") or die('query_failed');
                $message[] = 'registered successfully';
                header('location:login.php');
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="head.css">
    <title>Register Page</title>
</head>
<style>
    body{
        background-color: #99d6ff;
        display: grid;
        align-items: center;
        justify-items: center;
    }
    form{
        background-color: white;
        display: grid;
        width: 80vh;
        height: 50vh;
        justify-items: center;
        align-content: center;
    }
    label{
        padding-top: 10px;
        font-size: 3vh;
    }
    input[type=text]{
        width: 30vh;
        height: 30px;
    }
    input[type=submit]{
        margin-top: 10px;
        width: 15vh;
        height: 3vh;
        background-color: lightseagreen;
        border: 1px solid black;
        color: white;
        border-radius: 5px;
    }
</style>
<body>
    <section class="form-container">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                    echo '
                        <div class="message">
                            <span> '.$message.' </span>
                            <span class="icon" onclick="this.parentElement.remove()"> close </span>
                        </div>
                    ';
                }
            }

        ?>
        <form method="post">
            <h1>Register Now</h1>
            <input type="text" name="name" placeholder="enter your name" required>
            <input type="text" name="address" placeholder="enter your address" required>
            <input type="text" name="phone" placeholder="enter your contact" required>
            <input type="email" name="email" placeholder="enter your email" required>
            <input type="password" name="password" placeholder="enter your password" required>
            <input type="password" name="cpassword" placeholder="confirm your password" required>
            <input type="submit" name="submit-btn" value="register now" class="btn">
            <p>already have an account ? <a href="login.php">login now</a></p>
        </form>
    </section>
</body>
</html>