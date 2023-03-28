<?php
$img = $rowI['0']['pfad'];
$pfad = '/assets/images/logos/' . $img;
?>
<header class='fixed-top pb-5'>
        <span class='left-icon h-100'>
            <a href='/index.php' class='link'>
                <i class='fa-solid fa-house' id='home-icon'></i>
            </a>
        </span>
		<span class='middle-icon h-100'>
                <img src='<?php echo $pfad;?>'
                alt='Danger Quiz Logo'
                height='70%'>
        </span>
        <span id='logo-derk' class='middle-icon h-100' style='height:70%;display:none;'>
                <?php echo $rowI['0']['blob-dark'];?>
        </span>
		<span class='right-icon bi bi-mask h-100'>
            <button class='link p-0 ds-none'>
                <i class='fa-solid fa-circle-half-stroke' style='display:none' id="darkMode-icon"></i>
            </button>
        </span>
</header>
<br><br><br>