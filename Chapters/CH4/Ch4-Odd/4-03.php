<<<<<<< HEAD
<html>

<head>
  <title>การแทรกตัวแปรลงในสตริง</title>
</head>

<body>
  <?php
  $x = 123;
  $y = "abc";
  echo "$ x = $x <br />";
  echo "$ y = $y <br />";
  $x = &$y;
  echo "$ x = &$ y<br />";
  echo "$ x = $x <br />";
  echo "New value $ x<br />";
  $x = "php";
  echo "$ x = $x <br />";
  echo "$ y = $y <br />";
  echo "New value $ y<br />";
  $y = 100;
  echo "$ x = $x <br />";
  echo "$ y = $y <br />"; ?>
</body>

=======
<html>

<head>
  <title>การแทรกตัวแปรลงในสตริง</title>
</head>

<body>
  <?php
  $x = 123;
  $y = "abc";
  echo "$ x = $x <br />";
  echo "$ y = $y <br />";
  $x = &$y;
  echo "$ x = &$ y<br />";
  echo "$ x = $x <br />";
  echo "New value $ x<br />";
  $x = "php";
  echo "$ x = $x <br />";
  echo "$ y = $y <br />";
  echo "New value $ y<br />";
  $y = 100;
  echo "$ x = $x <br />";
  echo "$ y = $y <br />"; ?>
</body>

>>>>>>> 75ef5b1dd3557e2814bce46b7e36b9c255df8e31
</html>