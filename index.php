<!DOCTYPE html>
<html lang="en">
<head>
<title>Bryant Contracting: Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
}
    
.header {
    padding: 10px; /* Some padding */
    background: #ffffff; /* White background */
    color: #0F5010; /* Green text color */
    display: flex; /* Added */
    justify-content: space-between; /* Added */
    align-items: center; /* Moves content in the centre */
}

.logo {
    flex-shrink: 0; /* Courtesy of ChatGPT */
    margin-right: 20px; 
}

.text {
    text-align: right; /* Moves the text to the right */
}

/* Increase the font size of the <h1> element */
.header h1 {
    font-size: 40px;
}
    
/* Style the top navigation bar */
.navbar {
    overflow: hidden; /* Hide overflow */
    background-color: #0F5010; /* green background color */
}

/* Style the navigation bar links */
.navbar a {
    float: left; /* Make sure that the links stay side-by-side */
    display: block; /* Change the display to block, for responsive reasons */
    color: white; /* White text color */
    text-align: center; /* Center the text */
    padding: 14px 20px; /* Some padding */
    text-decoration: none; /* Remove underline */
}

/* Right-aligned link */
.navbar a.right {
    float: right; /* Float a link to the right */
}

/* Change color on hover/mouse-over */
.navbar a:hover {
    background-color: #ddd; /* Grey background color */     /* NTS: Change this color */
    color: black; /* Black text color */
}
    
/* Ensure proper sizing */
* {
    box-sizing: border-box;
}

/* Column container */
.row {
    display: flex;
    flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */    /* This may be changed */
/* Sidebar/left column */
.side {
    flex: 30%; /* Set the width of the sidebar */
    background-color: #f1f1f1; /* Grey background color */
    padding: 20px; /* Some padding */
}

/* Main column */
.main {
    flex: 70%; /* Set the width of the main content */
    background-color: white; /* White background color */
    padding: 20px; /* Some padding */
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
    .row {
    flex-direction: column;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
    }
}
    
/* Media query for mobile screens */
@media screen and (max-width: 768px) {
    .header {
        flex-direction: column; /* Stack items vertically */
        align-items: center; /* Align items to center */
    }
    .text {
        text-align: center; /* Align text to center */
        margin-top: 10px; /* Add some space between image and text */
    }
    .logo {
        margin-right: 0; /* Remove right margin to align image with text */
        margin-left: 31px; /* Manually move the logo to the right to visually align with text */
        margin-bottom: 10px; /* Add margin to center vertically */
    }
}
    
.footer {
    padding: 20px; /* Some padding */
    text-align: left; /* Left text*/
    background: #0F5010; /* Green background */
    color: #ffffff; /* White text color */
}
</style>
</head>
<body>


<div class="header">
    <div class="logo">
        <img src="https://live.staticflickr.com/65535/53710731185_fe74e26743_o.jpg" alt="Bryant Contracting" style="width: 90%;">
    </div>
    <div class="text">
        <h1>027 215 4213</h1>
        <h3>nik@bryantcontracting.co.nz</h3>
    </div>
</div>

<div class="navbar">
    <a href="#">Home</a>
    <a href="#">Agriculture</a>
    <a href="#">Earthworks</a>
    <a href="#">Cartage</a>
    <a href="#">Gallery</a>
    <a href="#" class="right">Contact</a>
</div>
    
<div class="row">
    <div class="side">
        <h2>Side</h2>
    </div>
    <div class="main">
        <h2>TITLE HEADING</h2>
        <br> <!-- Created some temporary whitespace -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>

<div class="footer">
    <h2>Contact us! - 027 215 4213</h2>
</div>

</body>
</html>