<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?php
    function add($n1, $n2 = 999)
    {
        $result = $n1 + $n2;
        echo "$n1 + $n2 = $result <br>";
    }
    function subtract($n1, $n2 = 3)
    {
        $result = $n1 - $n2;
        echo "$n1 + $n2 = $result <br>";
    }
    function multiply($n1, $n2)
    {
        $result = $n1 * $n2;
        return $result;
    }
    $num1 = 10;
    $num2 = 20;

    function divide($n1, $n2, &$result)
    {
        $result = $n1 / $n2;
    }
    add($num1);
    subtract($num1);
    $resultMultiply = multiply($num1, $num2);
    divide($num1, $num2, $resultDivide);
    echo "Result of $num1 * $num2 : $resultMultiply <br> ";
    echo "Result of divide $num1 / $num2 : $resultDivide <br>";


    ?>
</body>

</html>