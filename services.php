<?php
// Include the database configuration file
include 'setup.php';
// Check if the ID is set in the URL
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  // Fetch the page details from the database
  $sql = "SELECT * FROM pages WHERE id=$id";
  $result = $conn->query($sql);
  // Check if the page exists
  if ($result->num_rows > 0) {
    $page = $result->fetch_assoc();
    
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
} else {
  echo "No page ID provided.";
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<div class="wrapper">
    <head>
        <!-- Apply fonts. The following code is in comment form because IDK how to make it work -->

            <!--@import url('https://fonts.googleapis.com/css2 family=Inter:wght@100..900&display=swap');
            <link rel="stylesheet" href="css/style.css"> -->

        <!-- page setup -->
        <title>Bryant Contracting: <?php Print $title1; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/style.css">

<style>
</style>

</head>

    <body>
        <?php include 'header.php';?>
        
            <div class="section">

                <img src="Images/<?php Print $image1; ?>" alt="this is a picture of a tractor">
                <div class="content-right">
                    <h2 class="large-text"><?php Print $title1; ?></h2>
                    <p class="medium-text"><?php Print $text1; ?></p>

                </div>
            </div>
        <?php include 'footer.php';?>

    </body>
</div>
</html>