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
    <p id="titleh">"SURVEY ON NUTRITION HABITS, FITNESS AND SPORT" </p>
  </div>

  <form action="page6.php" method="post"  onsubmit="return validateQuestion('range-slider');">

    <p>Do you feel you do too little, just enough or way too much additional physical activity?</p>

    <div id="r-s" class="row flex-nowrap">
      <div class="col" style="text-align: left;">
        <p>Little</p>
      </div>
      <div class="col" style="text-align: center;">
        <p>Enough</p>
      </div>
      <div class="col" style="text-align: right;">
        <p>Too much</p>
      </div> <br> <br>
    </div>

    <input type="range" name="range-slider" class="form-range" min="0" max="5" step="0.5" id="range-slider" onchange="sliderChanged();">
    <input type="hidden" name="lastPageID" value="index">
    <input type="hidden" name="range-slider-changed" id="range-slider-changed">
    <p id="validation-warning" class="warning"></p>


    <a href="page4.php">Previous</a>
    <button type="submit" class="next">Next</button><br><br>
  </form>

  <?php include 'Inc/footer.php' ?>
</body>

<script src="/js/validation.js"></script>
</html>