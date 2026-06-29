<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login – KHIT</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>

<!-- Header -->
<div class="site-header">
    <img src="Khitlogo.jpg" alt="KHIT Logo">
</div>

<!-- Navbar -->
<nav class="navbar">
    <ul>
        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="login.php" class="active"><i class="fa fa-lock"></i> Admin Login</a></li>
        <li><a href="fac.html"><i class="fa fa-users"></i> Examination Faculty</a></li>
        <li><a href="schedule.html"><i class="fa fa-calendar"></i> Examination Schedule</a></li>
        <li><a href="sresults.php"><i class="fa fa-trophy"></i> Student Results</a></li>
    </ul>
</nav>

<!-- Login Card -->
<div class="login-wrapper">
    <div class="login-card">
        <i class="fa fa-lock"></i>
        <h2>Admin Login</h2>
        <p class="subtitle">Sign in to access the admin dashboard</p>

        <form action="" method="post" name="login">
            <div class="form-group">
                <label for="userid">Username</label>
                <input type="text" id="userid" name="userid" placeholder="Enter admin username" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" autocomplete="off">
            </div>
            <button type="submit" class="btn-primary"><i class="fa fa-sign-in"></i> &nbsp;Login</button>
        </form>
    </div>
</div>

<footer>
    <p>&copy; 2024 KHIT Examination Cell. All rights reserved.</p>
</footer>

</body>
</html>

<?php
    include("init.php");
    session_start();

    if (isset($_POST["userid"], $_POST["password"])) {
        $username = $_POST["userid"];
        $password = $_POST["password"];
        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['login_user'] = $username;
            header("Location: dashboard.php");
        } else {
            echo '<script>alert("Invalid Username or Password")</script>';
        }
    }
?>
