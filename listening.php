<?php
require_once 'header.php';

?>
<body class="container">

    <div id="container">

    <div>
        <h2 class="container-title">Listening Task</h2>
        <p class="body-font">Please listen carefully to the sound recording. To start the recording, click on the PLAY button.</p>
        <p class="body-font"></p>
    </div>

    <audio id="audio">
        <source src="ai.mp3" type="audio/mp3" onended="showNextBtn()">
    </audio>        
    
    <button style="display: none" onload="setTimeout(myFunction, 95000)"></button>
        
        <div id='alrt' style="fontWeight = 'bold'"></div>

        <div class="wrapper">
            <div class="player circle">
                <div class="buffering circle animated"></div>
                <div class="triangle"></div>
            </div>

            <form action="apis/save-timestamp-listening.php" method="post">
                <input name="pageName" style="display: none" value="listeningPage">
                <!-- <button id="btnTimestamp" name="timestamp" class="btn-info click">Next</button> -->
                <div class = "button-wrap">
                    <button id="btnTimestamp" name="timestamp" class="btn-info click rad-button good flat btn-next-listening">Next</button>
                </div>
            </form>

        </div> 

    </div>

    <script>
        const audio = document.getElementById("audio");
        let audioPlaying = false;

        document.querySelector(".player").addEventListener('click', () => {
            audio.play();
            audioPlaying = true;
            document.querySelector(".buffering").style.visibility = 'visible';
        });

        audio.addEventListener("ended", function() {
            document.querySelector(".buffering").style.visibility = 'hidden';
            document.querySelector(".player").style.backgroundColor = 'lightgray';
            document.querySelector(".btn-next-listening").style.backgroundColor = '#259B24';
        });

    </script>

    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>