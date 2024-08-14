if ($_POST['username'] == 'admin') { header('Location: admin.php');}
			else { header('Location: index.php');}
<?php
session_start();
// Redirect to login page if user is not logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.html');
    exit;
}
?>

<?php
// Include the database configuration file
include 'setup.php';

// Fetch all pages from the database
$sql = "SELECT * FROM pages";
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
                    <h1>Admin Page</h1>
                    <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </div>
            </nav>
            <div class="content">
                <h2>Admin Page</h2>
                <p>Welcome back, <?= htmlspecialchars($_SESSION['name'], ENT_QUOTES) ?>!</p>
            </div>
        </body>
</html>

        <!DOCTYPE html>
        <html>
        <head>
          <title>Admin Panel</title>
        </head>
        <body>
          <h1>Admin Panel</h1>
          <a href="add_page.php">Add New Page</a>
          <h2>Pages</h2>
          <ul>
            <?php while ($row = $result->fetch_assoc()): ?>
              <li>
                <h3><?php echo $row['title1']; ?></h3>
                <a href="edit_page.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete_page.php?id=<?php echo $row['id']; ?>">Delete</a>
              </li>
            <?php endwhile; ?>
          </ul>
        </body>
     <!-- I dont know why this is red -->s
</html>

</div>