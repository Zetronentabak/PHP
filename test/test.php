<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade_Cal</title>
</head>

<body>
    <!-- HTML -->
    <form name="mid2" method="post" action="test.php">
        <h1>Grade Calculation</h1>
        <table width="400" align="center" border="0">
            <tr align="center">
                <td width="100">
                    File name
                </td width="100">
                <td>
                    <input type="text" name="filename" value="" size="40" /><br>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><br>
                    <input type="submit" name="submit" value="SUBMIT" />&nbsp;
                    <input type="reset" name="reset" value="RESET" />
                </td>
            </tr>
        </table>
    </form>
    <!-- PHP -->
    <?php
    if (isset($_POST['submit'])) {
        $filename = $_POST['filename'];
        $text = file($filename);
        foreach ($text as $tr_data) {

            $totalSum = 0;
            $row = 1;
            $array_word = explode(",", $tr_data);

            foreach ($array_word as $value) {
                $value = trim($value);
                if ($row == 1) {
                    echo "$value </br>"; //Name
                } else {
                    $value = (int)$value;
                    echo "$value </br>"; //Mid-Final value
                    $totalSum += $value;
                }
                $row++;
            }
            if ($totalSum >= 80) {
                $grade = "A";
            } elseif ($totalSum >= 70) {
                $grade = "B";
            } elseif ($totalSum >= 60) {
                $grade = "C";
            } elseif ($totalSum >= 50) {
                $grade = "D";
            } else {
                $grade = "F";
            }
            echo "$totalSum </br>"; //Total
            echo "$grade <br>"; //Grade
        }
    }

    ?>
</body>
<!-- CSS -->
<style>
    form {
        margin: auto;
        text-align: center;
        padding: 10px;
    }
</style>

</html>