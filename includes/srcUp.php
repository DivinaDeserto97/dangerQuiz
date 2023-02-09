<!---------------------------------------------------------- css -------------------------------------------------------------------->
<!-- mycss -->
<link rel='stylesheet' href='../assets/css/style.css'>
<!-- Bootstrap -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'>
<!-- font awsom -->
<link rel='stylesheet' href='../assets/fonts/webfont/fontawesome-pro-6.2.1-web/css/all.css'>
<link rel='stylesheet' href='../assets/fonts/webfont/fontawesome-pro-6.2.1-web/css/sharp-solid.css'>

<!----------------------------------------------------------- js -------------------------------------------------------------------->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
<script src='../assets/js/main.js' defer></script>

<!----------------------------------------------------------- js -------------------------------------------------------------------->
<style>
:root{
  --width-modal: 400px;

  --backgruod-dark: black;
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

