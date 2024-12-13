<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aliens | Welcome!</title>
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/user-style.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <?php
        include './components/header.php'
        ?>
        <div class="user-container">
            <?php
            include './components/welcome_logo.php'
            ?>
            <div class="nav-container">
                <h2>How can I help you?</h2>
                <p><a class="button" href="./users/login.php">SignIn as User</a></p>
                <p><a class="button" href="./admins/admin_login.php">SignIn as Admin</a></p>
                <p><a class="button" href="mailto:poisiedon14@gmail.com">Contact Admin</a></p>
            </div>
            <div class="links">
                <p>Don't have an account? </p>
                <a href="./users/register.php">Create Account</a>
            </div>
        </div>
    </div>
</body>

</html>