<html>

<head>
    <title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณเกรด</title>
</head>

<body>
    <form method="post">
        <table border="1" align="center" width="500">
            <tr>
                <td colspan="2" align="center">
                    <big>ทดสอบการใช้ Arithmatic Operator </big>
                </td>
            <tr>
            <tr>
                <td>Enter Home work : </td>
                <td><input type="number" min="0" max="30" name="hw" size="15" value="" /> </td>
            </tr>
            <td>Enter Midterm : </td>
            <td><input type="number" min="0" max="35" name="midterm" size="15" value="" /></td>
            </tr>
            </tr>
            <td>Enter final : </td>
            <td><input type="number" min="0" max="35" name="final" size="15" value="" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" OK " />
                    <input type="reset" value=" Clear " />
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['hw']) && isset($_POST['midterm']) && isset($_POST['final'])) {

        $hw = $_POST['hw'];
        $midterm = $_POST['midterm'];
        $final = $_POST['final'];

        if ($hw > 30) $hw = 30;
        if ($midterm > 35) $midterm = 35;
        if ($final > 35) $final = 35;

        echo "<div style='margin: 0 auto; text-align: left; width: 500px;'>";
        echo "<p>";
        echo "<b>ข้อมูลคะแนน</b><br />";
        echo "Homework: <i>$hw</i> <br />";
        echo "Midterm: <i>$midterm</i> <br />";
        echo "Final: <i>$final</i> <br />";

        $total = $hw + $midterm + $final;
        echo "Total Score: $total <br>";

        if ($total >= 80)
            echo "Result Grade : A<br>";
        elseif ($total >= 75)
            echo "Result Grade : B+<br>";
        elseif ($total >= 70)
            echo "Result Grade : B<br>";
        elseif ($total >= 65)
            echo "Result Grade : C+<br>";
        elseif ($total >= 60)
            echo "Result Grade : C<br>";
        elseif ($total >= 55)
            echo "Result Grade : D+<br>";
        elseif ($total >= 50)
            echo "Result Grade : D<br>";
        else
            echo "Result Grade : F<br>";

        echo "<br><a href=''> <big>Back</big></a>";
    }
    ?>
</body>

</html>