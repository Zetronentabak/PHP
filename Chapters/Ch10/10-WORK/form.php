<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>firstNameNickname</title>
</head>

<body>
    <!-- HTML -->
    <form name="mid2" method="post" action="form.php">
        <h1>firstNameNickname.php</h1>
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
            $col = 1;
            $array_word = explode(",", $tr_data);

            foreach ($array_word as $value) {
                $value = trim($value);
                if ($col == 1) {
                    echo "$value </br>";
                } else {
                    $value = (int)$value;
                    echo $value;

                }
                $col++;
            }
        }
    }

    ?>
</body>
<style>
    form {
        margin: auto;
        text-align: center;
        padding: 10px;
    }
</style>

</html>