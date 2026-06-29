<?php
    include("init.php");
    $no_of_classes  = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `class`"));
    $no_of_students = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `students`"));
    $no_of_result   = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `result`"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard – KHIT Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>

<!-- Top Bar -->
<div class="title">
    <span class="heading"><i class="fa fa-dashboard"></i> &nbsp;Admin Dashboard</span>
    <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
</div>

<!-- Admin Navbar -->
<div class="nav">
    <ul>
        <li class="dropdown" onclick="toggleDD('1')">
            <a class="dropbtn"><i class="fa fa-code-fork"></i> Branches <i class="fa fa-angle-down"></i></a>
            <div class="dropdown-content" id="1">
                <a href="add_classes.php"><i class="fa fa-plus"></i> Add Branch</a>
                <a href="manage_classes.php"><i class="fa fa-list"></i> View Branches</a>
            </div>
        </li>
        <li class="dropdown" onclick="toggleDD('2')">
            <a class="dropbtn"><i class="fa fa-graduation-cap"></i> Students <i class="fa fa-angle-down"></i></a>
            <div class="dropdown-content" id="2">
                <a href="add_students.php"><i class="fa fa-user-plus"></i> Add Students</a>
                <a href="manage_students.php"><i class="fa fa-users"></i> View Students</a>
            </div>
        </li>
        <li class="dropdown" onclick="toggleDD('3')">
            <a class="dropbtn"><i class="fa fa-file-text"></i> Results <i class="fa fa-angle-down"></i></a>
            <div class="dropdown-content" id="3">
                <a href="add_results.php"><i class="fa fa-plus"></i> Add Results</a>
                <a href="manage_results.php"><i class="fa fa-table"></i> Manage Results</a>
            </div>
        </li>
        <li class="dropdown" onclick="toggleDD('4')">
            <a class="dropbtn"><i class="fa fa-tachometer"></i> Dashboard <i class="fa fa-angle-down"></i></a>
            <div class="dropdown-content" id="4">
                <a href="dashboard.php"><i class="fa fa-eye"></i> View Dashboard</a>
            </div>
        </li>
    </ul>
</div>

<!-- Dashboard Content -->
<div class="dashboard-container">
    <h2>Overview</h2>
    <div class="stats-grid">
        <div class="stat-card">
            <div class="icon"><i class="fa fa-code-fork"></i></div>
            <div class="info">
                <p>Total Branches</p>
                <div class="number"><?php echo $no_of_classes[0]; ?></div>
            </div>
        </div>
        <div class="stat-card">
            <div class="icon"><i class="fa fa-graduation-cap"></i></div>
            <div class="info">
                <p>Total Students</p>
                <div class="number"><?php echo $no_of_students[0]; ?></div>
            </div>
        </div>
        <div class="stat-card">
            <div class="icon"><i class="fa fa-file-text-o"></i></div>
            <div class="info">
                <p>Results Uploaded</p>
                <div class="number"><?php echo $no_of_result[0]; ?></div>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>&copy; 2024 KHIT Examination Cell. All rights reserved.</p>
</footer>

<script>
function toggleDD(id) {
    document.querySelectorAll('.dropdown-content').forEach(function(el) {
        if (el.id !== id) el.classList.remove('show');
    });
    document.getElementById(id).classList.toggle('show');
}
document.addEventListener('click', function(e) {
    if (!e.target.closest('.dropdown')) {
        document.querySelectorAll('.dropdown-content').forEach(el => el.classList.remove('show'));
    }
});
</script>

</body>
</html>

<?php include('session.php'); ?>
