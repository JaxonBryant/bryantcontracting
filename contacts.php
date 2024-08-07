<!DOCTYPE html>
<html lang="en">
<div class="wrapper">
    <head>
        <!-- Add fonts across the whole website -->

            <!--@import url('https://fonts.googleapis.com/css2 family=Inter:wght@100..900&display=swap');
            <link rel="stylesheet" href="css/style.css"> -->

        <!-- page setup -->
        <title>Bryant Contracting: Contacts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/style.css">

    <style>
        /* Style inputs with type="text", select elements and textareas */
        input[type=text], select, textarea {
            width: 100%; /* Full width */
            padding: 12px; /* Some padding */
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 6px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
        }
        /* Style the submit button with a specific background color etc */
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        /* When moving the mouse over the submit button, add a darker green color */
        input[type=submit]:hover {
            background-color: #45a049;
        }
        /* Add a background color and some padding around the form */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

    </style>
    </head>

        <body>
        <?php include 'header.php';?>

            <div class="container">
                <form action="process_form.php" method="POST">

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="first_name" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="last_name" placeholder="Your last name..">

                    <!-- This email code was added by me in place of the country, so IDK how it works with everything else-->
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Your email..">

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        <?php include 'footer.php';?>
    </body>
</div>
</html>