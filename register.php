<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courgette">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="register-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Register</h2>
                <p>Fill out this form to start chatting with friends!</p>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="user_name" placeholder="i.e. Someone123"
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="user_password" placeholder="Password"
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="user_email" placeholder="someone@site.com"
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Country</label>
                <select class="form-control" name="user_country" required>
                    <option disabled>Select A Country</option>
                    <option>United States</option>
                    <option>U.K.</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="user_gender" required>
                    <option disabled>Chooser Your Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Non-Binary</option>
                </select>
            </div>
            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required> I Accept the <a href="#">
                    Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Register</button>
            </div>
            <!-- <?php //include("register_user.php"); ?> -->
        </form>
        <div class="text-center small" style="color: #674288;">Already have an account? <a href="
        login.php">Sign In</a></div>
    </div>
</body>
</html>