<<<<<<< HEAD
<html>

<head>
    <title>แสดงการฟังก์ชั่น fopen และ fgets</title>
</head>

<body>
    <?php
    // open file
    $fp = @fopen("sample.txt", "r");
    if ($fp) {
        while (!feof($fp)) {
            $data = @fgets($fp);
            echo $data . "<br>";
        }
    } else {
        die("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ !</body></html>");
    }
    ?>
</body>

=======
<html>

<head>
    <title>แสดงการฟังก์ชั่น fopen และ fgets</title>
</head>

<body>
    <?php
    // open file
    $fp = @fopen("sample.txt", "r");
    if ($fp) {
        while (!feof($fp)) {
            $data = @fgets($fp);
            echo $data . "<br>";
        }
    } else {
        die("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ !</body></html>");
    }
    ?>
</body>

>>>>>>> 75ef5b1dd3557e2814bce46b7e36b9c255df8e31
</html>