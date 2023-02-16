/* Change Bright to Dark */
function buttonChangeBrightDark(){
    let mustBrightDark = localStorage.getItem('mustBrightDark');
    if(mustBrightDark === 'Dark'){
        localStorage.setItem('mustBrightDark' , 'Bright');
    } else {
        localStorage.setItem('mustBrightDark' , 'Dark');
    }
  } /* Wechsel dark-light-mode Bilder: */
  
  function changeDark(){
    /* Pictures Bright off */
    document.getElementById('logo').style.display = 'none'; 
    /* Pictures Dark ein */I
    document.getElementByd('logo').style.display = 'inline-flex';
  }
  function changeBright(){
    /* Pictures Bright off */
    document.getElementById('headerWrapperDay').style.display = 'inline-flex'; 
    /* Pictures Dark on */
    document.getElementById('headerWrapperNight').style.display = 'none'; 
  }
  function changeBrightDark(){
    /* so oder so ??? */
    document.body.classList.toggle('bodyDark');
  
    let buttons = document.querySelectorAll('.btn-light');
  
    for (let b = 0; b < buttons.length; b++) {
        buttons[b].classList.toggle('btn-dark');
    }
    /* specific change */
    let isBrightDark = localStorage.getItem('isBrightDark');
    if(isBrightDark === 'Bright'){
        changeDark();
        localStorage.setItem('isBrightDark' , 'Dark');
    } else {
        changeBright();
        localStorage.setItem('isBrightDark' , 'Bright');
    }
  }
  function checkBrightDark(){
    let isBrightDark = localStorage.getItem('isBrightDark');
    let mustBrightDark = localStorage.getItem('mustBrightDark');
    if(!(isBrightDark === mustBrightDark)){
        changeBrightDark();
    }
  }
  var intervalChangeBrightDark;
  
  function startChangeBrightDark(){
    localStorage.setItem('isBrightDark' , 'Bright');
    let mustBrightDark = localStorage.getItem('mustBrightDark');
    if(!(mustBrightDark === 'Dark')){
        localStorage.setItem('mustBrightDark' , 'Bright');
    }
    intervalChangeBrightDark = setInterval(function(){checkBrightDark();} , 10);
  }