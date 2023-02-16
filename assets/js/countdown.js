// TIMER QUIZ --------------------------------------------------------------------------------------------------------------------------
var count;
var maxCount;
var intervalId; // Wird zum Stoppen von setInterval() verwendet.

function startCountdown() {
  var max = document.getElementById("timerQuestion").value; // value aus hidden Feld;
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
    setDisplay(count);
  }
}

function setDisplay(info) {
  // 'info' kann z. Bsp. ein String oder eine Zahl sein.
  document.getElementById("display").innerHTML = info;
}

function pressNext() {
  document.getElementById("nextQuestion").click(); // drückt button mit der id 'nextQuestion'.
}

startCountdown();
