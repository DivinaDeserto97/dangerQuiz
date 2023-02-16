<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js'></script>
</head>
<body> 
    <h1 id='app'>Count Down from 10</h1>

    <div class='alert alert-success' role='alert'>
        <script>
            var count;            // Die Variable count ist deklariert. Ihr Wert ist noch undefined.
            var maxCount = 10;    // Später konfigurierbar
            var intervalId;       // Wird zum Stoppen von setInterval() verwendet.

            function startCountdown() {
                stopCountdown();
                setDisplay(maxCount);
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
                    setDisplay('GO!');
                    stopCountdown();
                }
                else {
                    // Zeige aktuellen 'count' an.
                    setDisplay(count);
                }
            }

            function setDisplay(info) { // 'info' kann z. Bsp. ein String oder eine Zahl sein.
                document.getElementById('display').innerText = info;
            }
        </script>

        <p id='display'>&nbsp;</p>

        <button type='button' 
                class='btn btn-primary'
                id='startButton'
                onclick='startCountdown();'>START</button>

        <button type='button' 
                class='btn btn-success'
                id='stopButton'
                onclick='stopCountdown();'>STOP</button>
    </div>

</body>
</html>