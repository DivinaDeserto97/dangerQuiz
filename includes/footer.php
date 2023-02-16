
<footer class='row footer-light fixed-bottom px-2 py-1'>
    <div class='col-1'>
        <?php
        if (str_contains($scriptName, 'question')) {

            echo "
                
                <button id='showSession' type='button' onclick='deleteAllCookies();' class='btn-next'>

                    <i class='fa-solid fa-timer' id='next-icon'></i>
                  </button>";
        } elseif (str_contains($scriptName, 'report')) {
            echo "<button class='btn-next w-100' onclick='document.location=`/index.php`;'
                  style='position:fixed; bottom:1rem;'>
                    <i class='fa-solid fa-arrows-rotate' id='next-icon'></i>
                  </button>";
        }
        ?>
    </div>
    <div class='col d-flex justify-content-end'>
        <?php
        if (str_contains($scriptName, 'index')) {
            echo "<button type='submit' class='btn-next' value='Start'>
                    <i class='fa-solid fa-circle-play' id='next-icon'></i>
                  </button>";
        } elseif (str_contains($scriptName, 'question')) {
            echo "<button id='nextQuestion' type='submit' class='btn-next'>
                    <i class='fa-solid fa-circle-chevron-right' id='next-icon'></i>
                  </button>";
        }
        ?>
    </div>
</footer>

<!-- modal Container -->
<div id="session" class="modal">
        <!-- modal Header -->
        <div class='modal-header bg-dark text-light h-25'>
            <p class="fw-bold text-center w-100 fs-3 m-0">TIMER</p>
        </div>
        <!-- modal Body -->
        <div class="modal-body h-75">
                <div id='display' class="timer">
                </div>
        </div>
</div>