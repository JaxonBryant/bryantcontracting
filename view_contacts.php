
<?php
session_start();
// Redirect to login page if user is not logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.html');
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
<div class="wrapper">
    <html lang="en">
    
<?php include 'header_logic.php';?>
        
<br>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Contacts</title>
    <!-- Basic styling for the table -->
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

        <h1>Messages</h1>
        <table>
            <tr>
                <!-- Table headers for displaying contact data -->
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date Submitted</th>
            </tr>
            <?php
                // SQL query to select data from the contacts table
                $sql = "SELECT id, first_name, last_name, email, message, created_at FROM contacts";
                $result = $conn->query($sql);

                // Check if there are any results returned by the query
                if ($result->num_rows > 0) {
                    // Loop through each row in the results
                    while($row = $result->fetch_assoc()) {
                        // Output each row of the data in a table row
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["first_name"] . "</td>";
                        echo "<td>" . $row["last_name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["message"] . "</td>";
                        echo "<td>" . $row["created_at"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    // If no records are found, output a message in a table row
                    echo "<tr><td colspan='6'>No contacts found</td></tr>";
                }

                // Close the database connection
                $conn->close();
            ?>
        </table>
    </body>
</html>