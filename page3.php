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

  <form action="page4.php" method="post" onsubmit="return validateQuestion('range-slider');">

    <p>How important is physical activity to you?</p>
    <div id="r-s" class="row flex-nowrap">
      <div class="col" style="text-align: left;">
        <p>Not fit</p>
      </div>
      <div class="col" style="text-align: center;">
        <p>50/50</p>
      </div>
      <div class="col" style="text-align: right;">
        <p>Fit</p>
      </div> <br> <br>
    </div>
    <input type="range" name="range-slider" class="form-range" min="0" max="5" step="0.5" id="range-slider" onchange="sliderChanged();">
    <input type="hidden" name="lastPageID" value="index">
    <input type="hidden" name="range-slider-changed" id="range-slider-changed">
    <p id="validation-warning" class="warning"></p>

    <button type="submit" class="next">Next</button><br><br>
    <a href="index.php">Previous</a>
    <p class="spacer"></p>

  </form>

  <?php include 'Inc/footer.php' ?>
</body>

<script src="/js/validation.js"></script>

</html>