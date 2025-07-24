<!DOCTYPE html>
<html>
<head>
    <title>ตรวจสอบจำนวนวันในเดือน</title>
</head>
<body>
    <h2>กรุณากรอกชื่อเดือน</h2>
    <form method="get" action="">
        <label for="month">เดือน:</label>
        <input type="text" name="month" id="month" required>
        <input type="submit" value="ตรวจสอบ">
    </form>

    <?php
    if (isset($_GET['month'])) {
        $month = trim($_GET['month']);
        $month = mb_strtolower($month, "UTF-8"); 

        echo "<h3>ผลลัพธ์:</h3>";

        switch ($month) {
            case "มกราคม":
            case "มีนาคม":
            case "พฤษภาคม":
            case "กรกฎาคม":
            case "สิงหาคม":
            case "ตุลาคม":
            case "ธันวาคม":
                echo "เดือน $month มี 31 วัน";
                break;
            case "เมษายน":
            case "มิถุนายน":
            case "กันยายน":
            case "พฤศจิกายน":
                echo "เดือน $month มี 30 วัน";
                break;
            case "กุมภาพันธ์":
                echo "เดือน $month มี 28 หรือ 29 วัน";
                break;
            default:
                echo "ไม่รู้จักชื่อเดือน: $month กรุณากรอกใหม่ เช่น มกราคม, กุมภาพันธ์ ฯลฯ";
        }
    }
    ?>
</body>
</html>
