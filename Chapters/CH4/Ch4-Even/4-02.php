<<<<<<< HEAD
<html>

<head>
  <title>การกำหนดค่าแบบอ้างอิง</title>
</head>

<body>
  <?php
  $x = 123;
  $y = "abc";
  echo "$ x = ";
  echo $x;
  echo "<br />";
  echo "$ y = ";
  echo $y;
  echo "<br />";

  $x = &$y;
  echo "$ x = &$ y <br />";
  echo "$ x = ";
  echo $x;
  echo "<br />";
  echo "New value $ x<br />";

  $x = "php";
  echo "$ x = ";
  echo $x;
  echo "<br />";
  echo "$ y = ";
  echo $y;
  echo "<br />";
  echo "New value $ y<br />";

  $y = 100;
  echo "$ x = ";
  echo $x;
  echo "<br />";
  echo "$ y = ";
  echo $y;
  echo "<br />";
  ?>
</body>

=======
<html>

<head>
  <title>การกำหนดค่าแบบอ้างอิง</title>
</head>

<body>
  <?php
  $x = 123;
  $y = "abc";
  echo "$ x = ";
  echo $x;
  echo "<br />";
  echo "$ y = ";
  echo $y;
  echo "<br />";

  $x = &$y;
  echo "$ x = &$ y <br />";
  echo "$ x = ";
  echo $x;
  echo "<br />";
  echo "New value $ x<br />";

  $x = "php";
  echo "$ x = ";
  echo $x;
  echo "<br />";
  echo "$ y = ";
  echo $y;
  echo "<br />";
  echo "New value $ y<br />";

  $y = 100;
  echo "$ x = ";
  echo $x;
  echo "<br />";
  echo "$ y = ";
  echo $y;
  echo "<br />";
  ?>
</body>

>>>>>>> 75ef5b1dd3557e2814bce46b7e36b9c255df8e31
</html>