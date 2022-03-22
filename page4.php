<!DOCTYPE html>
<html lang="en">

<head>
  <title>HEALTH SURVEY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <meta charset="utf-8">

</head>

<body>
  <?php include 'Inc/header.php' ?>
  <?php include 'data-collector.php' ?>

  <div class="title-index">
    <p id="titleh">"SURVEY ON NUTRITION HABITS, FITNESS AND SPORT"</p>
  </div>
  
  <form action="page5.php" method="post" onsubmit="return validateQuestion('');">
        <label for="">Choose an answer:</label>

        <p>What additional physical activity do you do most?</p>
        <input type="checkbox" id="q41" name="q41" value="q41">
        <label for="q41"> No add. physical activity </label><br>
        <input type="checkbox" id="q42" name="q42" value="q42">
        <label for="q42"> Lifting weights</label><br>
        <input type="checkbox" id="q43" name="vehicle3" value="Boat">
        <label for="q43"> Walking</label><br>
        <input type="checkbox" id="q44" name="q44" value="q44">
        <label for="q44"> Jogging </label><br>
        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Running </label><br>
        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Swimming </label><br>
        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Dancing </label><br>
        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Aerobics </label><br>
        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Pilates </label><br>
        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Team Sports </label><br>
        <input type="checkbox" id="q45" name="q45" value="q45">
        <label for="q45"> Other </label><br><br>

        <button type="submit" class="next">NEXT</button><br><br>
        <a href="page3.php">previous</a>
        <p class="spacer"></p>
    </form>
  <?php include 'Inc/footer.php' ?>
</body>

<script src="/js/validation.js"></script>
</html>