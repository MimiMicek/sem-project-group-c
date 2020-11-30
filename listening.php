<?php
require_once 'header.php';

?>
<body class="container">

    <div id="container">
        <h2>The following task is a listening task so please listen carefully</h2>
        <embed src="<?php echo "listening.mp3";?>" autostart="true" loop="false" />
        <form action="apis/save-timestamp-listening.php" method="post">
            <input name="pageName" style="display: none" value="listeningPage">
            <button id="btnTimestamp" name="timestamp" class="btn-info click">Next</button>
        </form>
        <div id='alrt' style="fontWeight = 'bold'"></div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>

    </script>

</body>