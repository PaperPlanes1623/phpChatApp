<?php

session_start();

include('include/connection.php');

if(isset($_POST['sign_in'])) {
    $email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
    $pass = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));

    $select_user = "SELECT * FROM users WHERE user_email='$email' AND user_password='$pass'";

    $query = mysqli_query($conn, $select_user);
    $check_user = mysqli_num_rows($query);

    if($check_user == 1) {
        $_SESSION['user_email'] = $email;

        $update_msg = mysqli_query($conn, "UPDATE users SET log_in='Online' WHERE user_email=$email'");

        $user = $_SESSION['user_email'];
        $get_user = "SELECT * FROM users WHERE user_email='$user'";
        $run_user = mysqli_query($conn, $get_user);
        $row = mysqli_fetch_array($run_user);

        $user_name = $row['user_name'];

        echo "<script>window.open('home.php?user_name=$user_name', '_self')</script>";
    } else {
        echo "

        <div class='alert alerg-danger'>
            <strong>Check your email and password.</strong>
        </div>
        
        ";
    }
}