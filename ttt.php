<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tic Tac Toe Game | Escape Room</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
::selection{
  color: #fff;
  background:#56baed;
}
body{
  background:#56baed;
}
.select-box, .play-board, .result-box{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transition: all 0.3s ease;
}
.select-box{
  background: #fff;
  padding: 20px 25px 25px;
  border-radius: 5px;
  max-width: 400px;
  width: 100%;
}
.select-box.hide{
  opacity: 0;
  pointer-events: none;
}
.select-box header{
  font-size: 30px;
  font-weight: 600;
  padding-bottom: 10px;
  border-bottom: 1px solid lightgrey;
}
.select-box .title{
  font-size: 22px;
  font-weight: 500;
  margin: 20px 0;
}
.select-box .options{
  display: flex;
  width: 100%;
}
.options button{
  width: 100%;
  font-size: 20px;
  font-weight: 500;
  padding: 10px 0;
  border: none;
  background: #56baed;
  border-radius: 5px;
  color: #fff;
  outline: none;
  cursor: pointer;
  transition: all 0.3s ease;
}
.options button:hover,
.btn button:hover{
  transform: scale(0.96);
}
.options button.playerX{
  margin-right: 5px;
}
.options button.playerO{
  margin-left: 5px;
}
.select-box .credit{
  text-align: center;
  margin-top: 20px;
  font-size: 18px;
  font-weight: 500;
}
.select-box .credit a{
  color: #56baed;
  text-decoration: none;
}
.select-box .credit a:hover{
  text-decoration: underline;
}

.play-board{
  opacity: 0;
  pointer-events: none;
  transform: translate(-50%, -50%) scale(0.9);
}
.play-board.show{
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);
}
.play-board .details{
  padding: 7px;
  border-radius: 5px;
  background: #fff;
}
.play-board .players{
  width: 100%;
  display: flex;
  position: relative;
  justify-content: space-between;
}
.players span{
  position: relative;
  z-index: 2;
  color: #56baed;
  font-size: 20px;
  font-weight: 500;
  padding: 10px 0;
  width: 100%;
  text-align: center;
  cursor: default;
  user-select: none;
  transition: all 0.3 ease;
}
.players.active span:first-child{
  color: #fff;
}
.players.active span:last-child{
  color: #56baed;
}
.players span:first-child{
  color: #fff;
}
.players .slider{
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: #56baed;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.players.active .slider{
  left: 50%;
}
.players.active span:first-child{
  color: #56baed;
}
.players.active span:nth-child(2){
  color: #fff;
}
.players.active .slider{
  left: 50%;
}
.play-area{
  margin-top: 20px;
}
.play-area section{
  display: flex;
  margin-bottom: 1px;
}
.play-area section span{
  display: block;
  height: 90px;
  width: 90px;
  margin: 2px;
  color: #56baed;
  font-size: 40px;
  line-height: 80px;
  text-align: center;
  border-radius: 5px;
  background: #fff;
}

.result-box{
  padding: 25px 20px;
  border-radius: 5px;
  max-width: 400px;
  width: 100%;
  opacity: 0;
  text-align: center;
  background: #fff;
  pointer-events: none;
  transform: translate(-50%, -50%) scale(0.9);
}
.result-box.show{
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);
}
.result-box .won-text{
  font-size: 30px;
  font-weight: 500;
  display: flex;
  justify-content: center;
}
.result-box .won-text p{
  font-weight: 600;
  margin: 0 5px;
}
.result-box .btn{
  width: 100%;
  margin-top: 25px;
  display: flex;
  justify-content: center;
}
.btn button{
  font-size: 18px;
  font-weight: 500;
  padding: 8px 20px;
  border: none;
  background: #56baed;
  border-radius: 5px;
  color: #fff;
  outline: none;
  cursor: pointer;
  transition: all 0.3s ease;
}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <!-- select box -->
  <div class="select-box">
    <header>Tic Tac Toe</header>
    <div class="content">
      <div class="title">Select which you want to be?</div>
      <div class="options">
        <button class="playerX">Player (X)</button>
        <button class="playerO">Player (O) - Ghost</button>
      </div>
    </div>
  </div> 

  <!-- playboard section -->
  <div class="play-board">
    <div class="details">
      <div class="players">
        <span class="Xturn">X's Turn</span>
        <span class="Oturn">O's Turn</span>
        <div class="slider"></div>
      </div>
    </div>
    <div class="play-area">
      <section>
        <span class="box1"></span>
        <span class="box2"></span>
        <span class="box3"></span>
      </section>
      <section>
        <span class="box4"></span>
        <span class="box5"></span>
        <span class="box6"></span>
      </section>
      <section>
        <span class="box7"></span>
        <span class="box8"></span>
        <span class="box9"></span>
      </section>
    </div>
  </div>

  <!-- result box -->
  <div class="result-box">
    <div class="won-text"></div>
    <div class="btn"><button>Replay</button></div>
  </div>

  <script>
    const selectBox = document.querySelector(".select-box"),
selectBtnX = selectBox.querySelector(".options .playerX"),
selectBtnO = selectBox.querySelector(".options .playerO"),
playBoard = document.querySelector(".play-board"),
players = document.querySelector(".players"),
allBox = document.querySelectorAll("section span"),
resultBox = document.querySelector(".result-box"),
wonText = resultBox.querySelector(".won-text"),
replayBtn = resultBox.querySelector("button");

window.onload = ()=>{
    for (let i = 0; i < allBox.length; i++) {
       allBox[i].setAttribute("onclick", "clickedBox(this)");
    }
}

selectBtnX.onclick = ()=>{
    selectBox.classList.add("hide");
    playBoard.classList.add("show");
}

selectBtnO.onclick = ()=>{ 
    selectBox.classList.add("hide");
    playBoard.classList.add("show");
    players.setAttribute("class", "players active player");
}

let playerXIcon = "fas fa-times",
playerOIcon = "far fa-circle",
playerSign = "X",
runBot = true;

function clickedBox(element){
    if(players.classList.contains("player")){
        playerSign = "O";
        element.innerHTML = `<i class="${playerOIcon}"></i>`;
        players.classList.remove("active");
        element.setAttribute("id", playerSign);
    }else{
        element.innerHTML = `<i class="${playerXIcon}"></i>`;
        element.setAttribute("id", playerSign);
        players.classList.add("active");
    }
    selectWinner();
    element.style.pointerEvents = "none";
    playBoard.style.pointerEvents = "none";
    let randomTimeDelay = ((Math.random() * 1000) + 200).toFixed();
    setTimeout(()=>{
        bot(runBot);
    }, randomTimeDelay);
}

function bot(){
    let array = [];
    if(runBot){
        playerSign = "O";
        for (let i = 0; i < allBox.length; i++) {
            if(allBox[i].childElementCount == 0){
                array.push(i);
            }
        }
        let randomBox = array[Math.floor(Math.random() * array.length)];
        if(array.length > 0){
            if(players.classList.contains("player")){ 
                playerSign = "X";
                allBox[randomBox].innerHTML = `<i class="${playerXIcon}"></i>`;
                allBox[randomBox].setAttribute("id", playerSign);
                players.classList.add("active");
            }else{
                allBox[randomBox].innerHTML = `<i class="${playerOIcon}"></i>`;
                players.classList.remove("active");
                allBox[randomBox].setAttribute("id", playerSign);
            }
            selectWinner();
        }
        allBox[randomBox].style.pointerEvents = "none";
        playBoard.style.pointerEvents = "auto";
        playerSign = "X";
    }
}

function getIdVal(classname){
    return document.querySelector(".box" + classname).id;
}
function checkIdSign(val1, val2, val3, sign){ 
    if(getIdVal(val1) == sign && getIdVal(val2) == sign && getIdVal(val3) == sign){
        return true;
    }
}
function selectWinner(){
    if(checkIdSign(1,2,3,playerSign) || checkIdSign(4,5,6, playerSign) || checkIdSign(7,8,9, playerSign) || checkIdSign(1,4,7, playerSign) || checkIdSign(2,5,8, playerSign) || checkIdSign(3,6,9, playerSign) || checkIdSign(1,5,9, playerSign) || checkIdSign(3,5,7, playerSign)){
        runBot = false;
        bot(runBot);
        setTimeout(()=>{
            resultBox.classList.add("show");
            playBoard.classList.remove("show");
        }, 700);
        wonText.innerHTML = `Player <p>${playerSign}</p> won the game!`;
        location.href="house.php";
        wonText.innerHTML=`location.href`;
    }else{
        if(getIdVal(1) != "" && getIdVal(2) != "" && getIdVal(3) != "" && getIdVal(4) != "" && getIdVal(5) != "" && getIdVal(6) != "" && getIdVal(7) != "" && getIdVal(8) != "" && getIdVal(9) != ""){
            runBot = false;
            bot(runBot);
            setTimeout(()=>{
                resultBox.classList.add("show");
                playBoard.classList.remove("show");
            }, 700);
            wonText.textContent = "Match has been drawn!";
        }
    }
}

replayBtn.onclick = ()=>{
    window.location.reload();
}
  </script>

</body>
</html>