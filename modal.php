
<?php
// Check if the session has not been started
if (session_status() === PHP_SESSION_NONE) {
    session_start();  // Start session if it hasn't been started
}

// Testing message
//$_SESSION["message"] = 'Successful';

// Get the message from the session if it exists
if (isset($_SESSION['message'])) {
    //echo '<p class="error-message">' . $_SESSION['message'] . '</p>';
    $message = $_SESSION['message'];
    //die();
    unset($_SESSION['message']);
}

// Check if the message is not empty, and if it is then run modal code
if (!empty($message)): ?>


    <!-- Modal structure -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p><?php echo htmlspecialchars($message); ?></p> <!-- Print the message safely -->
        </div>
    </div>

    <!-- Inline CSS for the modal -->
    <style>
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0; 
            top: 0; 
            width: 100%; 
            height: 100%; 
            background-color: rgba(0, 0, 0, 0.5); 
        }

        /* Modal content */
        .modal-content {
            background-color: white;
            margin: 15% auto; 
            padding: 20px;
            border-radius: 5px;
            width: 80%;
            max-width: 500px;
        }

        /* Close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover, .close:focus {
            color: black;
            cursor: pointer;
        }
    </style>

    <!-- JavaScript for modal functionality -->
    <script>
        // Get modal element and close button
        var modal = document.getElementById("myModal");
        var span = document.getElementsByClassName("close")[0];

        // Show the modal when the page loads
        window.onload = function() {
            modal.style.display = "block";
        };

        // Close the modal when the user clicks on the close button
        span.onclick = function() {
            modal.style.display = "none";
        };

        // Close the modal if the user clicks anywhere outside the modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    </script>

<?php 
// Clear the session message after displaying the modal so it doesn't persist
unset($_SESSION['message']);
endif; ?>

