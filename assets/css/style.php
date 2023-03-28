<style>
  :root {
    --width-modal: 400px;

    --backgruod-light: #BA181B;
  }

  body {
    background-color: var(--backgruod-light);
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

  #home-icon:hover,
  #darkMode-icon:hover,
  #next-icon:hover,
  .link:hover {
    color: #660708;
  }

  #home-icon:active,
  #darkMode-icon:active,
  #next-icon:active {
    color: white;
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

  .link {
    color: black;
    background-color: var(--backgruod-light);
    font-size: 32px;
    border: none;
  }

  .pre-cont {
    display: flex;
    height: 80vh;
    align-items: center;
  }

  .cont-general {
    width: 95%;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
  }

  .formular {
    padding: 2rem;
    width: 40%;
    background-color: #E5383B;
  }

  .cont-question {
    width: 98%;
    margin: auto;
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
  }

  .cont-formular {
    padding: 1rem;

  }

  .cont-question form {
    width: 60%;
  }

  .cont-img {
    width: 40%;
    display: flex;
    align-items: center;
  }

  .cont-img img {
    width: 100%;
  }

  .btn-next {
    border: none;
    background-color: var(--backgruod-light);
    font-size: 35px;
  }

  .cont-result {
    width: 95%;
    display: flex;
    justify-content:space-evenly;
  }

  .result-text {
    width: 50%;
  }

  .result-img{
  width: 40%;
  display:flex;
  align-items:center;
  justify-content:center;
}
.result-img img{
  width:60%;
}

/* ---------------------------------------------------------------------------- */
    
.modal {
  width: 25%;
  height: 45%;
  display: none;
  position: fixed;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.modal-header {

  padding: 16px;
  color: white;
  cursor: move;
}

.modal-body {

  padding: 16px;
  background-color: white;
  overflow: auto;
}
.modal{
  border-radius:50%;
  animation-name: modal;
  animation-duration: 1s;
  animation-iteration-count: 30;
}
@keyframes modal {
  0%   {left:50vw; top:70vh;}
  25%  {left:50vw; top:70vh;}
  50%  {left:51vw; top:70vh;}
  75%  {left:49vw; top:70vh;}
  100% {left:50vw; top:70vh;}
}
.timer{
  display:flex;
  justify-content:center;
  align-items: center;
  height:100%;
  font-weight:bold;
  font-size:150px;
}

@media(max-width: 575px){
      .cont-general{
        width:100%;
        flex-direction:column;
      }
      .formular{
        margin:auto;
        padding-left:5%;
        width: 95%;
      }
      .cont-result{
        flex-direction:column-reverse;
        align-items:center;
      }
      .result-img img{
        width:60%;
      }
      .result-text{
        width: 100%;
      }
      .timer{
        font-size:100px;
      }
      .modal{
        width:50%;
        height:25%;
      }
      @keyframes modal {
        0%   {left:50vw; top:85vh;}
        25%  {left:50vw; top:85vh;}
        50%  {left:51vw; top:85vh;}
        75%  {left:49vw; top:85vh;}
        100% {left:50vw; top:85vh;}
      }
    }

</style>

