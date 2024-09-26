
<body>
    <header>
        <link rel="stylesheet" href="css/style.css">
        <div class="logo">
            <img src="images/bryant_contracting_logo.jpg" alt="Bryant Contracting" style="width: 90%;">
        </div>
        <div class="text">
            <h1>Admin</h1>
        </div>
    </header>

<style>
</style>

<nav>
    <a href="admin.php">Edit</a>
    <a href="admindashboard_bookings.php">Bookings</a>
    <a href="view_contacts.php">Messages</a>
    <a href="profile.php">Profile</a>
    <?php 
    if(!isset($_SESSION['loggedin'])){?>
    <a href="login.html" class="right">Login</a>
    <?php }

    else
    {
    ?>          
    <a href="logout.php" class="right">Logout</a>
    <?php 
        } 
    ?>
    <a href="index.php?id=1" class="right">Home</a>
</nav>

</body>


