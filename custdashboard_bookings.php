
<?php
session_start();
require 'setup.php'; // Include database connection

// print_r($_SESSION);
//die(); 

// Check if user is logged in
if (!$_SESSION['loggedin']) {
    header('Location: login_form.php');
    exit();
}

if (isset($_SESSION['message'])) {
    //echo '<p class="error-message">' . $_SESSION['message'] . '</p>';
    $message = $_SESSION['message'];
    //die();
    unset($_SESSION['message']);
}

$customer_id = $_SESSION['id'];

// SQL query to fetch the customer's booking information information
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
    WHERE bookings.customer_id= ?
    ORDER BY 
        bookings.date_booking, accounts.username
");
$stmt->bind_param("i", $customer_id);
$stmt->execute();
$results = $stmt->get_result();
?>

<!DOCTYPE html>
<html>

    <head>
        <?php include 'modal.php'; ?>
        <title>Customer Dashboard: Bookings</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
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
        <div class="wrapper">
            <?php include 'header.php'; ?>
        <h1>Your Bookings</h1>
        <br>
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

