
<?php
session_start();
// Redirect to login page if user is not logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.html');
    exit;
}

// print_r($_SESSION); die();

//if ($_SESSION['admin'] != 1) { header('Location: index.php');}

$id = $_SESSION['id'];
    
// Include the database configuration file
include 'setup.php';

// Fetch all pages from the database
$sql = "SELECT * FROM accounts where id='$id'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<div class="wrapper">
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body class="loggedin">
        
        <nav class="navtop">
            <div>
                <h1>Customer Dashboard</h1>
                <a href="custdashboard.php"><i class="fas fa-user-circle"></i>Home</a>
                <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>
        
    </body>
    
    <?php include 'header_logic.php';?>
        
        <div class="content">
            <h2>Admin Page</h2>
            <p>Welcome back, <?= htmlspecialchars($_SESSION['name'], ENT_QUOTES) ?>!</p>
        </div>
    
    <body>
    </body>
    
    
    
</html>

        
</div>