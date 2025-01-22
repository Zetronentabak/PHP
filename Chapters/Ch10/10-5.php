<<<<<<< HEAD
<html>

<head>
    <title>แสดงการฟังก์ชั่น fread, fwrite</title>
</head>

<body>
    <?php
    // open file
    $fp = @fopen("sample.txt", "r");
    if ($fp) {
        $fpWrite = @fopen("sample.dat", "w");
        if ($fpWrite) {
            while (!feof($fp)) {
                $data = @fgets($fp);
                fwrite($fpWrite, $data);
            }
            fclose($fp);
            fclose($fpWrite);
            $fpRead = @fopen("sample.dat", "r");
            while (!feof($fpRead)) {
                $data = fread($fpRead, 20);
                echo $data . "<br>";
            }
            fclose($fpRead);
        } else {
            die("ไม่สามารถเปิดไฟล์ Sample.dat เพื่อเขียนได้ !");
        }
    } else {
        die("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ !");
    }
    ?>
</body>

=======
<html>

<head>
    <title>แสดงการฟังก์ชั่น fread, fwrite</title>
</head>

<body>
    <?php
    // open file
    $fp = @fopen("sample.txt", "r");
    if ($fp) {
        $fpWrite = @fopen("sample.dat", "w");
        if ($fpWrite) {
            while (!feof($fp)) {
                $data = @fgets($fp);
                fwrite($fpWrite, $data);
            }
            fclose($fp);
            fclose($fpWrite);
            $fpRead = @fopen("sample.dat", "r");
            while (!feof($fpRead)) {
                $data = fread($fpRead, 20);
                echo $data . "<br>";
            }
            fclose($fpRead);
        } else {
            die("ไม่สามารถเปิดไฟล์ Sample.dat เพื่อเขียนได้ !");
        }
    } else {
        die("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ !");
    }
    ?>
</body>

>>>>>>> 75ef5b1dd3557e2814bce46b7e36b9c255df8e31
</html>