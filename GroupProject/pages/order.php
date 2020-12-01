<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Product System - Product Catalog</title>
  <!--<link rel="stylesheet" href="../styles.css">-->
</head>

<?PHP
  $username = 'student';
  $password = 'student';
  $connected = false;
  try { // if something goes wrong, an exception is thrown
    $dsn = "mysql:host=blitz.cs.niu.edu;dbname=csci467";
    $pdo_legacy = new PDO($dsn, $username, $password, array('port' => '3306'));
    $connected = true;
  }
  catch(PDOexception $e) { // handle that exception
    echo "Connection to database failed: " . $e->getMessage();
  }

  $username = 'z1845428';
  $password = '2000Jan13';
  $connected = false;
  try { // if something goes wrong, an exception is thrown
    $dsn = "mysql:host=courses;dbname=z1845428";
    $pdo = new PDO($dsn, $username, $password);
    $connected = true;
  }
  catch(PDOexception $e) { // handle that exception
    echo "Connection to database failed: " . $e->getMessage();
  }

  $rs = $pdo_legacy->query("DESCRIBE parts;");
  print_r($rs->fetchALL(PDO::FETCH_ASSOC));
?>

<header>
  <a href="../index.html">
    <h1>Home</h1>
  </a>
</header>

<body>
  <main id="">
    </div>
    <form action="submission.php" method="POST">
      <label>User</label>
        <select name="user_ID" class="data">
          <?php/*
          if($connected){
            $rs = $pdo->query("SELECT * FROM User;");
            $rows = $rs->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
              echo "<option value=" . $row["user_ID"] . ">" . $row["user_ID"] . " | " . $row["name"] . "</option>";
            }
          }
          ?>
        </select>
      <label>Type</label>
        <input list="type" name="type" value="" required >
        <datalist id="type">
          <?php
          if($connected){
            $rs = $pdo->query("SELECT DISTINCT type FROM Workout;");
            $rows = $rs->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
              echo "<option value=" . $row["type"] . ">" . $row["type"] . "</option>";
            }
          }
          ?>
        </datalist>
      <label>Intensity</label>
        <select name="intensity" class="data">
          <option value="Light">Light</option>
          <option value="Moderate">Moderate</option>
          <option value="Vigorous">Vigorous</option>
        </select>
      <label>Duration</label>
        <input type="number" name="duration" step="1" value="" title="Enter Exercise Duration in minutes" required>
      <input type="submit" name="enter_workout_submit" value="Enter Workout">
    </form>

    <h3 class="title" style="margin-top: 20px;">View Workout History</h3>
    <form  action="submission.php" method="POST">
      <label>User</label>
        <select name="user_ID" class="data">
          <?php
          if($connected){
            $rs = $pdo->query("SELECT * FROM User;");
            $rows = $rs->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
              echo "<option value=" . $row["user_ID"] . ">" . $row["user_ID"] . " | " . $row["name"] . "</option>";
            }
          }*/
          ?>
        </select>
      <label>From</label>
        <input type="date" id="from" name="from_date">
      <label>To</label>
        <input type="date" id="to" name="to_date">
      <input type="submit" name="workout_history_submit" value="View History">
    </form>-->
  </main>
</body>

<footer>
  <p>Created by the Wuhan Clan for NIU CSCI466 Group Project &copy; 4/20/2020</p>
</footer>
<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
</script>

</html>
