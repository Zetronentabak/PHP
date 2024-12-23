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

</html>