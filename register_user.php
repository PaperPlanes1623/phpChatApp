<?php
include('include/connection.php');

    if(isset($_POST['register'])) {
        $name = htmlentities(mysqli_real_escape_string($conn, $_POST['user_name']));
        $pass = htmlentities(mysqli_real_escape_string($conn, $_POST['user_password']));
        $email = htmlentities(mysqli_real_escape_string($conn, $_POST['user_email']));
        $country = htmlentities(mysqli_real_escape_string($conn, $_POST['user_country']));
        $gender = htmlentities(mysqli_real_escape_string($conn, $_POST['user_gender']));
        $rand = rand(1, 2);

        if($name == '') {
            echo "<script>alert('We Cannot verify your name')</script>";
        }

        if(strlen($pass) <8) {
            echo "<script>alert('Password should be at least 8 characters')</script>";
            exit();
        }

        $check_email = "SELECT * FROM users WHERE user_email='$email'";
        $run_email = mysqli_query($conn, $check_email);

        $check = mysqli_num_rows($run_email);

        if($check==1) {
            echo "<script>alert('email already exists, please try again')</script>";
            echo "<script>window.open('register.php', '_self'</script>";
            exit();
        }

        if($rand == 1) 
            $profile_pic = "images/codingcafe.jpg";
        else if ($rand == 2)
            $profile_pic = "images/codingcafe2.jpg";

            $insert = "INSERT INTO users (user_name, user_password, user_email, user_profile, user_country,
            user_gender) values('$name', '$pass', '$email', '$profile_pic', 'country', '$gender')";

            $query = mysqli_query($conn, $insert);

            if($query) {
                echo "<script>alert('Contratulations $name, your account has been created successfully')</script>";

                echo "<script>window.open('login.php', '_self')</script>";
            } else {
                echo "<script>alert('registration failed, try again')</script>";
                echo "<script>window.open('register.php')</script>";
            }
    }

  