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

//$teacher_id = $_SESSION['account_id'];

// SQL query to fetch customers and their bookings
$stmt = $conn->prepare("    
    SELECT 
        bookings.id AS booking_id, 
        accounts.username AS customer_name, 
        accounts.email AS customer_email, 
        service.service_name, 
        service.items, 
        bookings.date_booking, 
        bookings.created_at
    FROM 
        bookings
    LEFT JOIN 
        accounts ON bookings.customer_id = accounts.id
    LEFT JOIN 
        service ON bookings.service_id = service.id
    ORDER BY 
        bookings.date_booking, accounts.username
");

//$stmt->bind_param("i", $teacher_id);

$stmt->execute();
$results = $stmt->get_result();
?>


<!DOCTYPE html>
<html>
    <head>
        <div class="wrapper">
        <?php include 'header_admin.php';?>
        <title>Bookings</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
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
        <h1>Admin Dashboard</h1>
        <table>
            <tr>
            <th>Booking ID</th>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Service</th>
            <th>Service Item</th>
            <th>Booked Date</th>
            <th>Created At</th>
        </tr>
        <?php while ($row = $results->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['booking_id']); ?></td>
            <td><?php echo htmlspecialchars($row['customer_name']); ?></td>
            <td><?php echo htmlspecialchars($row['customer_email']); ?></td>
            <td><?php echo htmlspecialchars($row['service_name']); ?></td>
            <td><?php echo htmlspecialchars($row['items']); ?></td>
            <td><?php echo htmlspecialchars($row['date_booking']); ?></td>
            <td><?php echo htmlspecialchars($row['created_at']); ?></td>
        </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>

