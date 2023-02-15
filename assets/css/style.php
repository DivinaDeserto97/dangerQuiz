<style>
body {
        background-color: #BA181B;
    }
    .fixed-top {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        padding: 10px;
    }
    .fixed-top .left-icon {
        position: absolute;
        left: 10px;
    }
    .fixed-top .middle-icon {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }
    .fixed-top .right-icon {
        position: absolute;
        right: 10px;
    }
    .fixed-bottom {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 30px;
    }

    .fixed-bottom .right-icon {
        position: absolute;
        right: 10px;
    }
    .link{
      color: black;
      background-color: #BA181B;
      font-size: 32px;
      border: none;
    }
    .cont-general{
      width: 95%;
      display: flex;  
      flex-direction: row;
      justify-content: center;
    }
    .formular{
      width: 40%
    }
    .cont-img{
      width: 40%
    }
    .cont-img img{
      width: 100%;
    }
    @media(max-width: 575px){
      .cont-general{
        width:100%;
      }
      h1{
        background-color: white;
        width:100%;
      }
      .formular{
        margin-left:5%;
        width: 100%;
      }
    }

    /* ---------------------------------------------------------------------------- */
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
