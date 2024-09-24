
<?php
session_start();
require 'setup.php'; // Include database connection

print_r($_SESSION);
// die(); 

// Check if user is logged in
if (!$_SESSION['loggedin']) {
    header('Location: login.php');
    exit();
}

// Check if user account is validated
//if ($account['activation_code'] == 'activated') {
//	continue
//} else {
//	header('Location: login.php');
//    exit();
//}

print_r($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $services_id = $_POST['services_id'];
    $date_booking = $_POST['date'];
    $account_id = $_SESSION['id'];

    // Update the student's record to set the teacher's ID
    $stmt = $conn->prepare("INSERT INTO bookings (customer_id, service_id, date_booking) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $account_id, $services_id, $date_booking);

    if ($stmt->execute()) {
        echo "Booking successfully saved!";
    } else {
        echo "Error: Could not send booking.";
    }

    $stmt->close();
}

// Fetch all services to display in the selection form
$services_stmt = $conn->prepare("SELECT id, service_name FROM service");
$services_stmt->execute();
$services_result = $services_stmt->get_result();
?>



<!DOCTYPE html>
<html>
<head>
    <title>Service Booking</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <h1>Service Booking</h1>
    <form method="POST" action="bookings_form.php">
        <label for="services_id">Select a service:</label>
        
        <select name="services_id" id="services_id" required>
            <?php while ($service = $services_result->fetch_assoc()): 
            ?>
                <option value= "<?php echo htmlspecialchars($service['id']);?>">
                    <?php echo htmlspecialchars($service['service_name']); 
                    ?>
                </option>
            <?php endwhile;?>
            
            
        </select>
        <br><br>
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>
        <br><br>
        <button type="submit">Create Booking</button>
    </form>
</body>
</html>

