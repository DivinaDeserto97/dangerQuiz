//alert('test JS');

function workInProrgress() {
  alert("this funktion is in progress");
}

function deleteAllCookies() {
  alert("you start from the beginning");
  const cookies = document.cookie.split(";");

  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i];
    const eqPos = cookie.indexOf("=");
    const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  }
  window.location.href = "../index.php";
}

// NAVIGATION ------------------------------------------------------------------

function navigate(direction) {
  // Parameter der aktuellen Seite
  let pathname = window.location.pathname;
  let questionNum = parseInt(getElementValue("questionNum", "0"));
  let lastQuestionIndex = parseInt(getElementValue("lastQuestionIndex", "-1"));

  // Berechne die Parameter für die Ziel-Seite
  let indexStep = getIndexStep(direction);
  let nextQuestionIndex = lastQuestionIndex + indexStep;
  let actionTarget;

  if (0 <= nextQuestionIndex && nextQuestionIndex < questionNum) {
    // Eine Frage ist die Zielseite.
    actionTarget = "question.php";
  } else if (nextQuestionIndex >= questionNum) {
    // Die Auswertung ist die Zielseite.
    actionTarget = "report.php";
  } else {
    // nextQuestionIndex < 0
    // Die Startseite ist die Zielseite.
    actionTarget = "index.php";
  }

  // alert(`pathname = ${pathname};\nquestionNum = ${questionNum};\nlastQuestionIndex = ${lastQuestionIndex};\nindexStep = ${indexStep};\nnextQuestionIndex = ${nextQuestionIndex};\nactionTarget = ${actionTarget}`);

  if (pathname === "/" || pathname.indexOf("/index.php") >= 0) {
    // index.php -----------------------------------------------------------
    setActionTarget(actionTarget);
    setElementValue("indexStep", indexStep);

    // Keine weitere Validierung der Eingabefelder: Formular abschicken
    return true;
  } else if (pathname.indexOf("/question.php") >= 0) {
    // question.php --------------------------------------------------------
    setActionTarget(actionTarget);
    setElementValue("indexStep", indexStep);

    // Keine weitere Validierung der Antworten: Formular abschicken
    return true;
  } else if (pathname.indexOf("/report.php") >= 0) {
    // report.php ----------------------------------------------------------

    /*
            report.php hat keine Formulardaten, also gibt es auch keine
            Validierung.

            Die einzige erlaubte Navigation: Neues Quiz starten ab index.php.
        */
    document.location = "/index.php";
    return true;
  } else {
    // Die aktuelle Seite ist nicht bekannt: Blockiere die weitere Submit-Aktion.
    return false;
  }
}

function navigatePrevious() {
  let formElement = document.getElementById("quiz-form");
  formElement.setAttribute("onsubmit", "return navigate('previous');");
  // formElement.submit();
}

function getIndexStep(direction) {
  if (direction === "next") return 1;
  else if (direction === "previous") return -1;
  else return 0;
}

function getElementValue(fieldId, defaultValue) {
  let inputElement = document.getElementById(fieldId);

  if (inputElement) {
    // Verwende parseInt(), um den String-Wert in einen Integer zu verwandeln.
    return inputElement.value;
  } else {
    // In der aktuelle Seite fehlt das Feld: Default-Wert zurückgeben.
    return defaultValue;
  }
}

function setElementValue(fieldId, value) {
  let inputElement = document.getElementById(fieldId);
  if (inputElement) inputElement.value = value;
}

function setActionTarget(url) {
  let formElement = document.getElementById("quiz-form");
  formElement.action = url;
}

// FORM VALIDATION ---------------------------------------------------------------------------------------------------------------------

function validateStartParameter() {
  // TODO
  return true;
}

function validateAnswerSelection() {
  // TODO
  return true;
}

// GET THE MODAL------------------------------------------------------------------------------------------------------------------------
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
btn.onclick = function () {
  modal.style.display = "block";
};

// When the user starts dragging the header
header.onmousedown = function () {
  isDragging = true;
  initialX = event.clientX;
  initialY = event.clientY;
};

// When the user stops dragging the header
header.onmouseup = function () {
  isDragging = false;
};

// When the user moves the mouse while dragging the header
header.onmousemove = function () {
  if (isDragging) {
    currentX = event.clientX;
    currentY = event.clientY;
    xOffset = currentX - initialX;
    yOffset = currentY - initialY;
    initialX = currentX;
    initialY = currentY;
    modal.style.top = modal.offsetTop + yOffset + "px";
    modal.style.left = modal.offsetLeft + xOffset + "px";
  }
};

// TIMER QUIZ --------------------------------------------------------------------------------------------------------------------------
var count; // Die Variable count ist deklariert. Ihr Wert ist noch undefined.
var maxCount = document.getElementById("timerQuestion").value;
var intervalId; // Wird zum Stoppen von setInterval() verwendet.

function startCountdown() {
  //setDisplay(maxCount);
  count = maxCount; // Counter in Anfangszustand setzen.

  // Verwende die Referenz 'updateCounter', um die Funktion für später zu registrieren.
  intervalId = setInterval(updateCounter, 1000); // Jede Sekunde: aktualisiere den Zähler und die Anzeige.
}

function stopCountdown() {
  // JavaScript Funktion clearInterval() aufrufen.
  clearInterval(intervalId);
}

function updateCounter() {
  count = count - 1; // Kurzform: count--;

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

function pressNext() {
  document.getElementById("nextQuestion").click(); // drückt button mit der id 'nextQuestion'.
}

function checkbox() {
  var total = 0;
  var value;
  for (i = 0; i <= 4; i++) {
    value = document.getElementById(`answer-${i}`).value;
    checked = document.getElementById(`answer-${i}`).checked;
    if (checked) {
      if (value == 1) {
        total++;
      } else {
        total--;
      }
      if (total < 1) {
        total = 0;
      }
    }
  }
  total_question = document.getElementById("correct").value;
  document.getElementById("total_correct").value = total;
  result = total / total_question;
  document.getElementById("result").value = result;
}
