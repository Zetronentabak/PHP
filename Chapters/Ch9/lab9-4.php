<html>

<head>
    <title>แสดงการสร้างและใช้งานอารเรย์ Associative Array</title>
</head>

<body>
    <?php
    $weekdays = array(
        "sun" => "อาทิตย์",
        "mon" => "จันทร์",
        "tue" => "อังคาร",
        "wed" => "พุธ",
        "thu" => "พฤหัสบดี",
        "fri" => "ศุกร์",
        "sat" => "เสาร์"
    );

    $months = array(
        "jan" => "มกราคม",
        "feb" => "กุมภาพันธ์",
        "mar" => "มีนาคม",
        "apr" => "เมษายน",
        "may" => "พฤษภาคม",
        "jun" => "มิถุนายน",
        "jul" => "กรกฎาคม",
        "aug" => "สิงหาคม",
        "sep" => "กันยายน",
        "oct" => "ตุลาคม",
        "nov" => "พฤศจิกายน",
        "dec" => "ธันวาคม"
    );

    $d = $weekdays[strtolower(date("D"))];
    $m = $months[strtolower(date("M"))];
    $y = date("Y") + 543;

    echo "วันนี้คือวัน $d ที่ " . date("j") . " $m พ.ศ. $y<br>";
    echo "<table width='500'><tr><td>";
    print_array();
    echo "</td>";
    
    // Changing data in existing Array
    $months["jan"] = "January";
    $months[] = "** ทดสอบ **";

    echo "<td>";
    print_array();
    echo "</td></tr></table>";

    function print_array()
    {
        global $months;
        echo "<pre>";
        print_r($months);
        echo "</pre>";
    }
    ?>
</body>

</html>