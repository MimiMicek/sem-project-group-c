<?php
require_once 'header.php';

?>
<body class="container container-maze">
    <div>   
        <h2 class="container-title container-title-maze">Visuospacial & Maze</h2>
        <p class="no-space">Solve the following two tasks. <br>If any unexpected events occur, do not worry - they are part of the project design. <br> Only click FINISH once you are done with BOTH tasks.</p>
    </div>
    <hr>
<div class="maze-page-container">
    <div id="essay-container" style="margin: auto">
        <form id="task1" method="post">
            <p style="font-size: 14px">Which cube cannot be made based on the unfolded cube?</p>
            <div class="puzzle-img-container">
                <img style="width: 20%; height: 20%; position: center" src="../sem-project-group-u/imgs/task1.png">
            </div>
            <label for="radio" class="radio-label">
                <input class="radio" type="radio" name="answer1" value="answer1-task1" checked>
                <img style="width: 18%; height: 18%" src="../sem-project-group-u/imgs/answer1-task1.png">
                <input class="radio" type="radio" name="answer1" value="answer2-task1" checked>
                <img style="width: 18%; height: 18%" src="../sem-project-group-u/imgs/answer2-task1.png">
            </label>
            <label for="radio" class="radio-label">
                <input class="radio" type="radio" name="answer1" value="answer3-task1" checked>
                <img style="width: 18%; height: 18%" src="../sem-project-group-u/imgs/answer3-task1.png">
                <input class="radio" type="radio" name="answer1" value="answer4-task1" checked>
                <img style="width: 18%; height: 18%" src="../sem-project-group-u/imgs/answer4-task1.png">
            </label>
        </form>
        <hr>
        <form id="task3" method="post">
            <p style="font-size: 14px">Which figure is a rotation of the object?</p>
            <div class="puzzle-img-container">
                <img style="width: 20%; height: 20%; position: center" src="../sem-project-group-u/imgs/task3.svg">
            </div>
            <label for="radio" class="radio-label">
                <input class="radio" type="radio" name="answer2" value="answer1-task3" checked>
                <img style="width: 20%; height: 20%" src="../sem-project-group-u/imgs/answer1-task3.svg">
                <input class="radio" type="radio" name="answer2" value="answer2-task3" checked>
                <img style="width: 20%; height: 20%" src="../sem-project-group-u/imgs/answer2-task3.svg">
            </label>
            <label for="radio" class="radio-label">
                <input class="radio" type="radio" name="answer2" value="answer3-task3" checked>
                <img style="width: 20%; height: 20%" src="../sem-project-group-u/imgs/answer3-task3.svg">
                <input class="radio" type="radio" name="answer2" value="answer4-task3" checked>
                <img style="width: 20%; height: 20%" src="../sem-project-group-u/imgs/answer4-task3.svg">
            </label>
        </form>

    </div>
    <div class="button-wrap" >
        <button id="submit" name="timestamp" class="btn-info rad-button click">Finish</button>
    </div>
    <div id="maze-container">
        <p class="body-font body-font-maze-desc" style="font-size: 14px">Using the keys ↑ → ↓ ←, guide the CUCUMBER through the maze over to the CABBAGE.</p>

        <div id="page">
            <div id="Message-Container">
                <div id="message">
                    <h1>Congratulations!</h1>
                    <p>You are done.</p>
                    <p id="moves"></p>
                    <input id="okBtn" type="button" onclick="toggleVisablity('Message-Container')" value="Cool!" />
                </div>
            </div>
            <div id="menu">
                <div class="custom-select">
                    <select id="diffSelect">
                        <!--<option value="10">Easy</option>-->
                        <option value="15">Medium</option>
                        <option value="25">Hard</option>
                        <!--<option value="38">Extreme</option> -->
                    </select>
                </div>
                <input id="startMazeBtn" type="button" onclick="makeMaze()" value="Start" />
            </div>
            <div id="view">
                <div id="mazeContainer">
                    <canvas id="mazeCanvas" class="border" height="600" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js'></script>
<script src="js/maze.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    $("#submit").on("click", function () {
        $("form").each(function (index, form) {
            $(form).submit();
        });
    });

    $("form").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "apis/save-timestamp-essay-maze.php",
            data: $(this).serialize(),
            success: function (data) {
                console.log("Answers successfully saved!");
                window.location.href = "finish.php";
            },
            error: function (error) {
                console.error({ status: error.status, statusText: error.statusText })
            }
        });
    });

</script>
</html>