<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Results – KHIT</title>
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
        <li><a href="login.php"><i class="fa fa-lock"></i> Admin Login</a></li>
        <li><a href="fac.html"><i class="fa fa-users"></i> Examination Faculty</a></li>
        <li><a href="schedule.html"><i class="fa fa-calendar"></i> Examination Schedule</a></li>
        <li><a href="sresults.php" class="active"><i class="fa fa-trophy"></i> Student Results</a></li>
    </ul>
</nav>

<!-- Search Card -->
<div class="search-wrapper">
    <div class="search-card">
        <i class="fa fa-search"></i>
        <h2>Check Your Result</h2>
        <p class="subtitle">Select your branch and enter your roll number</p>

        <form action="./student.php" method="get">
            <div class="form-group">
                <label for="class">Branch</label>
                <?php
                    include('init.php');
                    $class_result = mysqli_query($conn, "SELECT `name` FROM `class`");
                    echo '<select name="class" id="class">';
                    echo '<option selected disabled>Select Branch</option>';
                    while ($row = mysqli_fetch_array($class_result)) {
                        $display = $row['name'];
                        echo '<option value="' . $display . '">' . $display . '</option>';
                    }
                    echo '</select>';
                ?>
            </div>
            <div class="form-group">
                <label for="rn">Roll Number</label>
                <input type="text" name="rn" id="rn" placeholder="Enter your roll number">
            </div>
            <button type="submit" class="btn-primary"><i class="fa fa-search"></i> &nbsp;Get Result</button>
        </form>
    </div>
</div>

<footer>
    <p>&copy; 2024 KHIT Examination Cell. All rights reserved.</p>
</footer>

</body>
</html>
