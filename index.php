
<?php
//session_start();
//print "session";print "<br />";
//print_r($_SESSION); //accounts_ID
//print "<br />";
//print "post";print "<br />";
//print_r($_POST); //product_ID
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'modal.php'; ?>
    <!-- Apply fonts. The following code is in comment form because IDK how to make it work -->
    
        <!--@import url('https://fonts.googleapis.com/css2 family=Inter:wght@100..900&display=swap');
        <link rel="stylesheet" href="css/style.css"> -->
    
    <!-- page setup -->
    <title>Bryant Contracting: Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">

<style>
</style>
<?php
// Include the database configuration file
include 'setup.php';

// Fetch all pages from the database
$sql = "SELECT * FROM pages where id = 1 ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $page = $result->fetch_assoc();
            //print_r( $page);
    
    // Assign the fields to variables
    $title1 = $page['title1'];
    $text1 = $page['text1'];
    $image1 = $page['image1'];
    $title2 = $page['title2'];
    $text2 = $page['text2'];
    $image2 = $page['image2'];
    $title3 = $page['title3'];
    $text3 = $page['text3'];
    $image3 = $page['image3'];
  } else {
    echo "Page not found.";
    exit;
  }
?>

</head>

<body>
    <div class="wrapper">
<?php include 'header.php';?>
    <div class="section">
           
        <img src="Images/<?php Print $image1; ?>" alt="this is a picture of a tractor">
        <div class="content-right">
            <h2 class="large-text"><?php Print $title1; ?></h2>
            <p class="medium-text">
        <?php Print $text1; ?>
            </p>

        </div>
    </div>

    <div class="section">
           
        <img src="Images/<?php Print $image2; ?>" alt="this is a picture of a tractor">
        <div class="content-left">
            <h2 class="large-text"><?php Print $title2; ?></h2>
            <p class="medium-text">
        <?php Print $text2; ?>
            </p>
        </div>
    </div>

    <div class="section">
        <img src="Images/<?php Print $image3; ?>" alt="this is a picture of a tractor">
        <div class="content-right">
            <h2 class="large-text"><?php Print $title3; ?></h2>
            <p class="medium-text">
        <?php Print $text3; ?>
            </p>
        </div>
    </div>
<?php include 'footer.php';?>
    
</body>
    </div>
</html>