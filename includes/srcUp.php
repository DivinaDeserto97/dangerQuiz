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

<script>
  // TIMER QUIZ --------------------------------------------------------------------------------------------------------------------------
var count; 
var maxCount;
var intervalId;       // Wird zum Stoppen von setInterval() verwendet.
  
function startCountdown() {

  var max = document.getElementById('timerQuestion').value; // value aus hidden Feld;
  console.log(max);
  maxCount = parseInt(max); // umwandeln in integer
  console.log(maxCount);

    //setDisplay(maxCount);
    count = maxCount; // Counter in Anfangszustand setzen.

    // Verwende die Referenz 'updateCounter', um die Funktion für später zu registrieren.
    intervalId = setInterval(updateCounter, 1000); // Jede Sekunde: aktualisiere den Zähler und die Anzeige.
}
              
function stopCountdown() {
    // JavaScript Funktion clearInterval() aufrufen.
    pressNext();
    clearInterval(intervalId);
  
}
  
function updateCounter() {
    count = count - 1; // Kurzform: count--;
    console.log(count);
    // If done then stop updating.
    if (count === 0) {
        // Count down ist fertig.
        stopCountdown();
    } else {
        // Zeige aktuellen 'count' an.
        // setDisplay(count);
    }
}
  
/* 
    function setDisplay(info) { // 'info' kann z. Bsp. ein String oder eine Zahl sein.
        document.getElementById('display').innerText = info;
    } 
*/
  
function pressNext(){
    document.getElementById('nextQuestion').click(); // drückt button mit der id 'nextQuestion'.
}

</script>
