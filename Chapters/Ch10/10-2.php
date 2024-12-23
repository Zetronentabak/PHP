<html>

<head>
    <title>แสดงการฟังก์ชั่น fopen และ fgetc</title>
</head>

<body>
    <?
    // open file
    $fp = @fopen("sample1.txt", "r");
    $first = true;
    if ($fp) {
        echo "<table border='1' align='center' width='50%'>";
        while (!feof($fp)) {
            $data = @fgetc($fp);
            if ($first) {
                echo "<tr><td align='center'>" . $data;
                $first = false;
            } else {
                if ($data == ",") echo "</td><td align='center'>";
                else if ($data == "\n") {
                    echo "</td></tr>";
                    $first = true;
                } else echo $data;
            }
        }
        echo "</table>";
    } else {
        die("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ ! </body></html>");
    }
    ?>
</body>

</html>