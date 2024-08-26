
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
    
<?php include 'header_logic.php';?>
        
        <div class="content">
            <h2>Customer Page</h2>
            <p>Welcome back, <?= htmlspecialchars($_SESSION['name'], ENT_QUOTES) ?>!</p>
        </div>
    
    <body>
    </body>
    
    
    
</html>

        
</div>