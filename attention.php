<?php
require_once 'header.php';

?>

<body class="container pink">
      <h2 class="container-title">Sustained Attention Task</h2>
      <div class="container-description">
        <p class="body-font">In this experiment you will be presented with the digits 1 to 9 in the center of the screen.
          Your task is to press the spacebar in response to each digit, except for when the digit is '3'. 
        </p>
        <p class="body-font">E.g. if you see the digit '1', press the spacebar. If you see a digit '3', DO NOT press the spacebar.
        </p>
        <p class="body-font"> Speed and accuracy are of equal importance. Click START, then immediately after, move your finger to the spacebar.</p>
      </div>
        
    <div id="numbers-container">
    </div>
    <div id="go" CLASS="number-font-size">GO</div>

    <div id="number-of-space-pressed">
    </div>

    <form action="apis/save-timestamp-attention.php" method="post">
        <input name="pageName" style="display: none" value="attentionPage">
        <input name="spacePressed" id="spacePressed" style="visibility: hidden" value="5">

        <div class = "button-wrap">
          <button id="btnTimestamp" name="timestamp" class="btn-info click rad-button good flat btn-next-listening attention-page-next-btn">Next</button>
        </div>
    </form>

    <div class="button-wrap attention-page-btn-wrap">
      <button id="start" class="btn-info click rad-button attention-page-start-btn">Start</button>
    </div>

    <script>
        let arrayOfNumbers = [];
        let numbersContainer = document.getElementById("numbers-container");
        let noOfSpacePressed = 0;
        let count;


        document.addEventListener('keyup', (e) => {
          if(e.keyCode == 32) {
            noOfSpacePressed++;
            console.log('pressed', noOfSpacePressed, 'times');
            localStorage.setItem('spacePressed', noOfSpacePressed);
          }
        });

        // INITIALIZE ARRAY OF NUMBERS

        for (let i=0; i<78; i++) {
          arrayOfNumbers.push(Math.floor(i/8.1));
        }

        // FOR TESTING
        // for (let i=0; i<9; i++) {
        //   arrayOfNumbers.push(Math.floor(i));
        // }

        function shuffleArray(arr) {
          arr.sort(() => Math.random() - 0.5);
        }

        document.querySelector("#start").addEventListener('click', () => {
          document.querySelector(".container-description").style.visibility = 'hidden';
          document.querySelector(".attention-page-start-btn").style.display = 'none';

          document.getElementById('go').style.visibility = 'visible';

          setTimeout(() => {
            startNumbers();
          }, 1500);
        });

        function startNumbers() {

          shuffleArray(arrayOfNumbers);
          console.log(arrayOfNumbers)
          

          for (let i=0; i<arrayOfNumbers.length; i++) {
            (function(ind) {
                document.getElementById('start').style.visibility = 'hidden';
                // setTimeout(function(){console.log(arrayOfNumbers[ind]);}, 1000 * ind);
                setTimeout(function(){
                  document.getElementById('go').style.display = 'none';
                  showNumber(arrayOfNumbers[ind]);
                  if(ind === arrayOfNumbers.length-1)
                  // count++;
                    showNextBtn();
                }, 500 * ind);
            })(i);
          }
        }


        function showNextBtn() {
          document.querySelector('.attention-page-next-btn').style.visibility = 'visible';
          document.querySelector('.attention-page-next-btn').style.backgroundColor = '#259B24';

          let spacePressedInput = document.querySelector('#spacePressed');
          console.log(spacePressedInput);
          spacePressedInput.setAttribute('value', noOfSpacePressed);

          console.log(spacePressedInput);

          // document.querySelector('#numbers-container').style.visibility = 'hidden';
        }


        function showNumber(number) {
          numbersContainer.innerHTML = '';
          console.log(number);

          let numberNode = document.createElement("p");
          numberNode.classList.add("number-font-size");
          numberNode.style.color = getRandomColor();
          let textnode = document.createTextNode(number);

          numberNode.appendChild(textnode);
          document.getElementById("numbers-container").appendChild(numberNode);
        }


        function getRandomColor() {
          var letters = '0123456789ABCDEF';
          var color = '#';
          for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
          }
          return color;
        }


    </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
