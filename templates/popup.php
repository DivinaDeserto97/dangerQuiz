<?php require ('./../includes/data-collector.php'); // Muss zuerst sein wegen start_session()
?>

<h5 id="showSession" class="btn btn-light">Show Session</h5>


<!-- modal Container -->
<div id="session" class="modal">
  <!-- modal Header -->
  <div class="modal-header" style="background-color:red">
    <p>$_SESSION</p>
  </div>
  <!-- modal Body -->
  <div class="modal-body">
    <p><?php prettyPrint($_SESSION, '$_SESSION=') ?></p>
  </div>
</div>

<style>
:root{
  --width-modal: 400px;
}

.modal {
  width: var(--width-modal);
  height: 400px;
  
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.modal-header {
  width:  var(--width-modal);
  height: 50px;

  padding: 16px;
  color: white;
  cursor: move;
}

.modal-body {
  width:  var(--width-modal);
  height: 350px;

  padding: 16px;
  background-color: white;
  overflow: auto;
}
</style>

<script>
    // Get the modal
var modal = document.getElementById("session");

// Get the button that opens the modal
var btn = document.getElementById("showSession");

// Get the modal header
var header = document.getElementsByClassName("modal-header")[0];

// Variables for dragging the modal
var isDragging = false;
var currentX;
var currentY;
var initialX;
var initialY;
var xOffset = 0;
var yOffset = 0;

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user starts dragging the header
header.onmousedown = function() {
  isDragging = true;
  initialX = event.clientX;
  initialY = event.clientY;
}

// When the user stops dragging the header
header.onmouseup = function() {
  isDragging = false;
}

// When the user moves the mouse while dragging the header
header.onmousemove = function() {
  if (isDragging) {
    currentX = event.clientX;
    currentY = event.clientY;
    xOffset = currentX - initialX;
    yOffset = currentY - initialY;
    initialX = currentX;
    initialY = currentY;
    modal.style.top = (modal.offsetTop + yOffset) + "px";
    modal.style.left = (modal.offsetLeft + xOffset) + "px";
  }
}
</script>