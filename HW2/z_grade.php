<html>

<head>
    <title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณเกรด</title>
</head>

<body>
    <div class="box">
        <div class="form-box">
            <form method="post">
                <table>
                    <tr>
                        <td colspan="2" align="center">
                            <big>ทดสอบการใช้ Arithmatic Operator</big>
                        </td>
                    </tr>
                    <tr>
                        <td>Enter Homework:</td>
                        <td><input type="number" min="0" max="30" name="hw" size="15" value="" /></td>
                    </tr>
                    <tr>
                        <td>Enter Midterm:</td>
                        <td><input type="number" min="0" max="35" name="midterm" size="15" value="" /></td>
                    </tr>
                    <tr>
                        <td>Enter Final:</td>
                        <td><input type="number" min="0" max="35" name="final" size="15" value="" /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="OK" />
                            <input type="reset" value="Clear" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <?php
        if (isset($_POST['hw']) && isset($_POST['midterm']) && isset($_POST['final'])) {
            $hw = $_POST['hw'];
            $midterm = $_POST['midterm'];
            $final = $_POST['final'];

            // Cap the scores
            if ($hw > 30) $hw = 30;
            if ($midterm > 35) $midterm = 35;
            if ($final > 35) $final = 35;

            echo "<div class='result-box'>";
            echo "<p>";
            echo "<b>ข้อมูลคะแนน</b><br />";
            echo "Homework: <i>$hw</i> <br />";
            echo "Midterm: <i>$midterm</i> <br />";
            echo "Final: <i>$final</i> <br />";

            $total = $hw + $midterm + $final;
            echo "Total Score: $total <br>";

            // Calculate grade
            if ($total >= 80) {
                echo "Result Grade: A<br>";
            } elseif ($total >= 70) {
                echo "Result Grade: B<br>";
            } elseif ($total >= 60) {
                echo "Result Grade: C<br>";
            } elseif ($total >= 50) {
                echo "Result Grade: D<br>";
            } else {
                echo "Result Grade: F<br>";
            }

            echo "<br><a href=''> <big>Redo</big></a>";
            echo "</div>";
        }
        ?>
    </div>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .box {
        display: grid;
        grid-template-columns: 1fr;
        justify-content: center;
        padding: 20px;
    }

    .form-box,
    .result-box {
        margin: auto;
        width: 50%;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
    }

    table td {
        padding: 8px;
    }

    .result-box {
        margin-top: 20px;
    }
</style>

</html>