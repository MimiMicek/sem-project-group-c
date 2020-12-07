<?php

require_once __DIR__ . '/db-connect.php';
require_once 'header.php';
ini_set('display_errors', 0);

?>

    <body class="container">
        <div class="align-self-center" style="margin: auto">
        <div class="container-description">
            <h3 class="container-title">WELCOME!</h3>
            <p class="body-font">During the next 10 minutes, you will be presented with a series of tasks to solve. Here is a short overview of the tasks.</p>
            
            <div class="tasks-container"></div>
                <h5><span class="task-number">Task 1</span>: Listening</h5>
                <p class="task-desc">where you will have to listen to a short audio given to you.</p>

                <h5><span class="task-number">Task 2</span>: Sustained Attention</h5>
                <p class="task-desc">where you will have to press the spacebar when certain stimuli get shown on the screen.</p>

                <h5><span class="task-number">Task 3</span>: Visuospatial & Maze </h5>
                <p class="task-desc">where you will have to choose a matching pattern and solve a maze.</p>
            </div>
            </div>
            <form action="apis/save-timestamp-overview.php" method="post">
                <input name="pageName" style="display: none" value="overviewPage">
                <!-- <button id="btnTimestamp" name="timestamp" class="btn-info click">Start</button> -->
        
                <div class = "button-wrap">
                    <button id="btnTimestamp" name="timestamp" class="btn-info click rad-button good flat">Start</button>
                </div>
            
            </form>
            <!-- You have
            <div id="timer"></div> seconds
            to memorize these tasks -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
<script>
    // var seconds=30;
    // var timer;
    // function myFunction() {
    //     if(seconds < 30) { //I want it to say 1:00, not 60
    //         document.getElementById("timer").innerHTML = seconds;
    //     }
    //     if (seconds > 0 ) { // so it doesn't go to -1
    //         seconds--;
    //     } else {
    //         clearInterval(timer);
    //         document.getElementById('btnTimestamp').click();
    //     <?php /*header("refresh:60;url=sem-project/spatial-maze.php");*/?>
    //     }
    // }
    // window.onload = function() {
    //     if(!timer) {
    //         timer = window.setInterval(function() {
    //             myFunction();
    //         }, 1000); // every second
    //     }
    // }

    document.getElementById("timer").innerHTML="1:00";
</script>