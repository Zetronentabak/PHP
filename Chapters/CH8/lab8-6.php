<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // declare function page_header with argument and defualt value
    function page_header($title, $bgcolor = "ffffff")
    {
        echo '<html><head><title>' . $title . '</title><head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }
    // declare function page_footer
    function page_footer($message)
    {
        echo '<hr />' . $message;
        echo '</body></html>';
    }
    // declare function summation
    function TestValue($num)
    {
        $num = $num + 10;
    }
    function TestReference(&$num)
    {
        $num = $num + 10;
    }
    function show_form()
    {
        echo ' <form method="get" action="lab8-6.php">';
        echo '<table border="1" align="center" width="400">';
        echo '<tr><td colspan="2" align="center"><big>การส่งค่าอาร์กิวเมนต์</big></td></tr>';
        echo '<tr><td>การส่งแบบ : </td><td>';
        echo '<input type="radio" name="type" value="1"> Pass by Value <br>';
        echo '<input type="radio" name="type" value="2"> Pass by Reference <br>';
        echo '</td><tr>';
        echo '<tr><td colspan="2" align="center">';
        echo '<input type="submit" value=" OK " />';
        echo '<input type="reset" value=" Clear " /></td></tr></table></form> ';
    }
    page_header("การส่งผ่านค่าอาร์กิวเมนต์", "EEDDFF");
    if (isset($_GET['type'])) {
        $n = intval($_GET['type']);
        show_form();
        echo '<hr>';
        $value = 10;
        if ($n == 1) {
            echo "การเรียกใช้ฟังก์ชั่นแบบ Pass by Value<br>";
            echo "ค่าของ \$value ก่อนเรียกฟังก์ชั่น Test มีค่า = $value <br>";
            TestValue($value);
            echo "ค่าของ \$value หลังเรียกฟังก์ชั่น Test มีค่า = $value <br>";
        } else {
            echo "การเรียกใช้ฟังก์ชั่นแบบ Pass by Reference<br>";
            echo "ค่าของ \$value ก่อนเรียกฟังก์ชั่น Test มีค่า = $value <br>";
            TestReference($value);
            echo "ค่าของ \$value หลังเรียกฟังก์ชั่น Test มีค่า = $value <br>";
        }
    } else {
        show_form();
    }
    page_footer("Thank You.");
    ?>

</body>

</html>