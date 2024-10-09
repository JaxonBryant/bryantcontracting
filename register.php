<?php
session_start();

// Include the database connection setup file
include 'setup.php';

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
    $_SESSION["message"] = "error message ?? ";
	 header("Location: register_form.php");
    exit();
}

// email validation
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $_SESSION["message"] = "Email is not valid";
    header("Location: register_form.php");
    exit();
}

// We need to check if the account with that username exists.
if ($stmt = $conn->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		$_SESSION["message"] = 'Username exists, please choose another!';
        header("Location: register_form.php");
        exit();
	} else {
		// Username doesn't exists, insert new account
//if ($stmt = $conn->prepare('INSERT INTO accounts (username, password, email, activation_code) VALUES (?, ?, ?, ?)')) {
if ($stmt = $conn->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
	// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	//$uniqid = uniqid();
    //$stmt->bind_param('ssss', $_POST['username'], $password, $_POST['email'], $uniqid);
    $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
	$stmt->execute();
    // Send email to validate account
	//$from    = 'noreply@yourdomain.com';
    //$subject = 'Account Activation Required';
    //$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
    // Update the activation variable below
    //$activate_link = 'http://yourdomain.com/phplogin/activate.php?email=' . $_POST['email'] . '&code=' . $uniqid;
    //$message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';
    //mail($_POST['email'], $subject, $message, $headers);
    //echo 'Please check your email to activate your account!';
    header("Location: login_form.php");
    exit;
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all three fields.
	$_SESSION["message"] = 'Could not prepare statement!';
    header("Location: register_form.php");
    exit();
}
	}
	$stmt->close();
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	$_SESSION["message"] = 'Could not prepare statement!';
    header("Location: register_form.php");
    exit();
}
$conn->close();
?>

