<html>

<head>
    <title>โปรแกรมการตาราง</title>
</head>

<body>
    <?php
    $row = $_POST['row'];
    $column = $_POST['column'];
    $rowMax = intval($row);
    $colMax = intval($column);
    echo "<table align='center' border='4' width='300'>";
    for ($r = 1; $r <= $rowMax; $r++) {
        echo "<tr>";
        for ($c = 1; $c <= $colMax; $c++) {
            if ($r == $c) {
                echo "<td align='center'><font color='#33ff66'> ";
                echo "$r,$c </font></td>";
            } else {
                echo "<td align='center'> $r,$c </td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <a href='lab6-12.php'> Back </a>
</body>

</html>