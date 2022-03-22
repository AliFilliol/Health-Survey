<!DOCTYPE html>
<html lang="en">

<head>
  <title>HEALTH SURVEY</title>
  
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <meta charset="utf-8">

</head>

<body>
  <?php include 'Inc/header.php' ?>
  <?php include 'Inc/data-collector.php' ?>
 

  <div class="title-index">
    <p id="titleh">"SURVEY ON NUTRITION HABITS, FITNESS AND SPORT"</p>
  </div>

  <div class="text">
    <form action="page3.php" method="post" onsubmit="return validateRadio('single-choice');">

      <label for="q2">Do you take nutritional supplements?</label><br>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="single-choice" id="single-choice-0" value="0">
        <label class="form-check-label" for="single-choice-0">
          No
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="1">
        <label class="form-check-label" for="single-choice-1">
          Yes
        </label>
      </div>

      <input type="hidden" name="lastPageID" value="question-2">
      <input type="range" name="range-slider" min="1" max="3" value="1" id="range-slider" onchange="sliderChanged();">
    


      <p id="validation-warning" class="warning"></p>
      <button type="submit" class="btn btn-primary">Next</button><br>
      <a href="index.php">Previous</a>
      <p class="spacer"></p>

    </form>
  </div>

  <?php include 'Inc/footer.php' ?>

</body>

<script src="/js/validation.js"></script>

</html>