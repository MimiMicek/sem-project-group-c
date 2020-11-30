<?php
require_once 'header.php';

?>
<body class="container">
    <h2>Please answer Questions 1 to 6:</h2>
      <form action="apis/save-timestamp-questions-answers.php" method="post">
          <p>Complete the sentences below.</p>
          <p>Write NO MORE THAN THREE WORDS for each answer.</p>
          <h3>Museum of the History of Science</h3>

          <p>1. The building of the museum of the History of Science was built in <input name="answer1">.</p>

          <p>2. The building originally contained a <input name="answer2"> in the basement, and lecture space for <input name="answer3">, what we today might call ‘Science’.</p>

          <p>3. The <input name="answer4"> on either side of the exit contain the kind of things that we used in this room in <input name="answer5">.</p>

          <p>4. The museum of the History of Science opened in <input name="answer6">.</p>

          <p>5. The museum is particularly famous for its collection of <input name="answer7">.</p>

          <p>6. In the four corners of the entrance gallery, are four of the museum’s important <input name="answer8">.</p>
          <input name="pageName" style="display: none" value="questionsPage">
        <button id="btnTimestamp" name="timestamp" class="btn-info click">Next</button>
    </form>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>