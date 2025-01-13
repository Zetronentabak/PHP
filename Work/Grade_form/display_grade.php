<html>

<head>
    <title>โปรแกรมค านวณเกรด</title>
</head>

<body>
    <?php
    $hw = $_GET['hw'];
    $midterm = $_GET['midterm'];
    $final = $_GET['final'];
    if ($hw > 30) $hw = 30;
    if ($midterm > 35) $midterm = 35;
    if ($final > 35) $final = 35;
    echo "<p>";
    echo "<b>ข้อมูลคะแนน </b><br />";
    echo "Homework : <i> $hw </i> <br/>";
    echo "Midterm : <i> $midterm </i> <br/>";
    echo "Final : <i> $final </i> <br/>";
    $total = $hw + $midterm + $final;
    echo "Total Score : $total <br>";
    if ($total >= 80) echo "Result Grade : A<br>";
    elseif ($total >= 70) echo "Result Grade : B<br>";
    elseif ($total >= 60) echo "Result Grade : C<br>";
    elseif ($total >= 50) echo "Result Grade : D<br>";
    else echo "Result Grade : F<br>";
    echo "<br>";
    echo "<a href='get_grade.php'> <big>Back </big></a>";
    ?>
</body>

</html>