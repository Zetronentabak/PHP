<html>

<head>
    <title>แสดงการสร้างและเข้าถึง Numeric Array แบบหลายมิติ</title>
</head>

<body>
    <?php
    
    $month = array(
        array(' ', ' ', ' ', '1', '2', '3', '4'),
        array('5', '6', '7', '8', '9', '10', '11'),
        array('12', '13', '14', '15', '16', '17', '18'),
        array('19', '20', '21', '22', '23', '24', '25'),
        array('26', '27', '28', '29', ' ', ' ', ' ')
    );

    $maxRow = count($month);
    $maxCol = count($month[0]);
    echo "<table border='1' align='center' width='100%'>";
    for ($r = 0; $r < $maxRow; $r++) {
        echo "<tr>";
        for ($c = 0; $c < $maxCol; $c++) {
            echo "<td width='50' align='center'>" . $month[$r][$c] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>