

<!-- Modal structure -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p><?php echo htmlspecialchars($message); ?></p> <!-- Print the message safely -->
    </div>
</div>

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
