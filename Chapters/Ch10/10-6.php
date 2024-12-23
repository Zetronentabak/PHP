<html>

<head>
    <title>แสดงการฟังก์ชั่น fread, fwrite</title>
</head>

<body>
    <?php
    // open file
    $fp = @fopen("koala.jpg", "rb");
    if ($fp) {
        $fpnew = @fopen("koala.jpg", "wb");
        while ($ln = @fread($fp, 1024)) {
            fwrite($fpnew, $ln);
        }
        @fclose($fp);
        @fclose($fpnew);
        echo "<h3>File Copy Finish...</h3>";
        echo "<image src='new_koala.jpg' width='320' height='240'>";
    } else {
        die("ไม่สามารถเปิดไฟล์ koala.jpg ได้ !");
    }
    ?>
</body>

</html>