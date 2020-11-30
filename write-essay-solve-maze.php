<?php
require_once 'header.php';

?>
<body class="container">
<div class="align-self-center" style="margin: auto">

    <form action="apis/save-timestamp-essay-maze.php" method="post">
        <label>Please write a short essay of around 150 words on the subject: </label><br>
        <h4> If you were to create a robot, what would that robot do?</h4>
        <textarea name="essay" placeholder="Robot ipsum Demoplast kinesicratical iridicovalent encephalolytic tetrakisphiliac decmycete Berkeleioplasia hydroaholic. Uroal zipurgy tothon praeplegia areoistical whereoholic dendroest thermophoresis. Hellalepry halfopia misoment chromoor schmtomy halfiatrics onpode antrophy karyate. Chrysoopia dendresque selenothon anglophobic homoioathon paedofid perfluoroped withric anarchoase. Unous bradynik penest nophoresis wekoped Indoferous kaular tungstochory. Topogen borofaction circumful abous orate lactolet Sinozoon hepatoward ornithoitis. Barplex pteridrrhagia hypses cytophasia selenphagia dactylomorphic technospeak ferrosoify. Cobaltomorphous Niloible spiroergy picoancy natroric benzogene auriplast brephoity. Pleurotropism entoalgia merogenetic francoiatric glycokin lexicolet pycnoal pleogene multiible haloiana. Dendrovorous endole backpenia melaphagia archiful sacrase sulphonasty pebify. Orthobiont spermatocentric histotend myelophilic auriplasm circumture sexaomics photologue. Kaism tachyscribe patragog exathermal megaloid archimorphous hectoodontia omnihood kiloes. Therioaemia paraate cobaltophagous aurpathy calliistically cosmoish twinmycota pyragogue wereesque. Potassiofic phleboflorous multiont dekalith conphane urmetry speleomorphous labiomo. Frankenzyme pentship dimethylimidazolphane calliped laevogynous Afrophyll entomoage. Hebeic dichlorzilla sitomancy genitoistical eigenth hispanoclast megform. Lactscribe ekapter ventriscript oneires karyest hysteroistic otoamine pteroonym retroosis warstome. Ergoacea uranosoene grandphycidae methylet cobaltolyze." rows="20" cols="100"></textarea><br><br>
        <input name="pageName" style="display: none" value="essayMazePage">
        <button name="timestamp" class="btn-info click">Finish</button>
    </form>
</div>
<hr>
<div id="page">
    <!--     <div id="Message-Container">
           <div id="message">
             <h1>Congratulations!</h1>
             <p>You are done.</p>
             <p id="moves"></p>
             <input id="okBtn" type="button" onclick="toggleVisablity('Message-Container')" value="Cool!" />
           </div>
         </div>-->
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
            <canvas id="mazeCanvas" class="border" height="400" width="400"></canvas>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js'></script>
<script src="js/maze.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>