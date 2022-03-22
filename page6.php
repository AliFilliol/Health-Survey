<!DOCTYPE html>
<html lang="en">

<head>
  <title>HEALTH SURVEY</title>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <meta charset="utf-8">

</head>

<body>
  <?php include 'Inc/header.php' ?>
  <?php include 'data-collector.php' ?>

  <div class="title-index">
    <p id="titleh">"SURVEY ON NUTRITION HABITS, FITNESS AND SPORT"</p>
  </div>
  
  <form action="page7.php" method="post" onsubmit="return validateQuestion('number-text');">
        <label for="">Choose an answer:</label>
        <p>On a typical day, how many of your meals or snacks contain carbohydrates?</p>
        <input type="number" name="number-text" id="number-text" class="form-control" style="max-width: 80px;">

        <input type="hidden" name="lastPageID" value="question-6">
        <p id="validation-warning" class="warning"></p>

        <button type="submit" class="btn btn-primary">Next</button>
        <a href="page5.php">Previous</a>
        <p class="spacer"></p>
    </form>

  <?php include 'Inc/footer.php' ?>
</body>

<script src="/js/validation.js"></script>

</html>