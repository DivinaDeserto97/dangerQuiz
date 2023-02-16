//alert('test JS');
function workInProrgress() {
  alert("this funktion is in progress");
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


// FORM VALIDATION ---------------------------------------------------------------------------------------------------------------------

function validateStartParameter() {
  return true;
}

function validateAnswerSelection() {
  return true;
}


  function setActionTarget(url) {
    let formElement = document.getElementById("quiz-form");
    formElement.action = url;
  }

  // GET THE MODAL------------------------------------------------------------------------------------------------------------------------
  var modal = document.getElementById("session");

  // Get the button that opens the modal
  var btn = document.getElementById("showSession");

  // Get the modal header
  var header = document.getElementsByClassName("modal-header")[0];


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

