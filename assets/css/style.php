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
  #next-icon:hover {
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
  }

  .result-text {
    width: 50%;
  }

  .result-img {
    width: 40%;
    display: flex;
    align-items: center;
    justify-content:center;
  }

  .result-img img {
    width: 60%;
  }

  @media(max-width: 575px) {
    .cont-general {
      width: 100%;
      flex-direction: column;
    }

    .formular {
      margin: auto;
      padding-left: 5%;
      width: 95%;
    }

    .cont-result {
      flex-direction: column-reverse;
      align-items: center;
    }

    .result-text {
      width: 100%;
    }
    .result-img img {
      width: 100%;
  }
  }

  /* ---------------------------------------------------------------------------- */

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
    width: var(--width-modal);
    height: 50px;

    padding: 16px;
    color: white;
    cursor: move;
  }

  .modal-body {
    width: var(--width-modal);
    height: 350px;

    padding: 16px;
    background-color: white;
    overflow: auto;
  }
</style>