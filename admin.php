
<?php
session_start();
// Redirect to login page if user is not logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login_form.php');
    exit;
}

// print_r($_SESSION); die();

if ($_SESSION['admin'] != 1) { header('Location: index.php');}

// Include the database configuration file
include 'setup.php';

// Fetch all pages from the database
$sql = "SELECT * FROM pages";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

    <head>
      <title>Admin Panel</title>
        <div class="wrapper">
        <?php include 'header_admin.php';?>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>

    <body>
        <br>
        <h1>Admin Panel</h1>
        <a href="add_page.php">Add New Page</a>
        <br>
        <h2>Pages</h2>
        <table>
            <tr>
                <th>Title1</th>
                <th>Title2</th>
                <th>Title 3</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td>
                    <h3><?php echo $row['title1']; ?></h3>
                </td>
                <td>
                    <h3><?php echo $row['title2']; ?></h3>
                </td>
                <td>
                    <h3><?php echo $row['title3']; ?></h3>
                </td>
                <td>
                    <a href="edit_page.php?id=<?php echo $row['id']; ?>">Edit</a>
                </td>
                <td>
                    <a href="delete_page.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </body>
    </div>
</html>