<body>
    <header>
        <div class="logo">
            <img src="images/bryant_contracting_logo.jpg" alt="Bryant Contracting" style="width: 90%;">
        </div>
        <div class="text">
            <h1>027 215 4213</h1>
            <h3>nik@bryantcontracting.co.nz</h3>
        </div>
    </header>

<style>
</style>

<nav>
    <a href="index.php?id=1">Home</a>
    <div class="services">
        <a href="services.php?id=2">Agriculture</a>
        <a href="services.php?id=3">Earthworks</a>
        <a href="services.php?id=4">Cartage</a>
    </div>
    <div class="dropdown">
        <a href="#" class="dropbtn">Services &#9662;</a>
        <div class="dropdown-content">
            <a href="services.php?id=2">Agriculture</a>
            <a href="services.php?id=3">Earthworks</a>
            <a href="services.php?id=4">Cartage</a>
        </div>
    </div>
    <a href="gallery.php">Gallery</a>
    <a href="contacts.php">Contacts</a>
    

    
<?php 
    if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {

    // Show the Logout link first
    echo '<a href="logout.php" class="right">Logout</a>';

    // Check if the user is an admin (admin == 1)
    if ($_SESSION['admin'] == 1) {
        // If admin, show the Admin link
        echo '<a href="admin.php" class="right">Admin</a>';
    } 
    // Check if the user is a regular user (admin == 0)
    elseif ($_SESSION['admin'] == 0) {
        // If not admin, show the Bookings link
        echo '<a href="custdashboard_bookings.php" class="right">Bookings</a>';
    }

} else {
    // If not logged in, show the Login link
    echo '<a href="login_form.php" class="right">Login</a>';
}
?>


</nav>

<script>
    // JavaScript to handle dropdown behavior
    document.addEventListener('DOMContentLoaded', function() {
        var dropdown = document.querySelector('.dropdown');
        var dropdownContent = document.querySelector('.dropdown-content');
        var dropbtn = document.querySelector('.dropbtn');

        dropbtn.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default anchor behavior
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        });

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                if (dropdownContent.style.display === 'block') {
                    dropdownContent.style.display = 'none';
                }
            }
        };
    });
</script>

</body>