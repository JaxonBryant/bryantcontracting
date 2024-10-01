if ($_POST['username'] == 'admin') { header('Location: admin.php');}
			else { header('Location: index.php');}
<?php
session_start();
// Redirect to login page if user is not logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login_form.php');
    exit;
}
?>

<?php
// Include the database configuration file
include 'setup.php';

// Check if the ID is set
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Delete the page from the database
  $sql = "DELETE FROM pages WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    echo "Page deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>