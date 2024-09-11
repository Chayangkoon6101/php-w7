<?php
    $number = $_POST['number'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $gender = $_POST['gender'];

    switch ($gender) {
        case 1:
            $gendd = "ชาย";
        break;
        case 2:
            $gendd = "หญิง";
        break;
        default:
            $gendd = "อื่นๆ";
    }

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chayangkoon6101</title>
    <link href="https://bootswatch.com/5/solar/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container card my-5 mb-5 py-3 rounded-4">
        <form>
            <h2>ข้อมูลคุณ</h2>
                <p class="mb-2">ชื่อ: <?php echo $name;?></p>
                <p class="mb-2">ชั้น: <?php echo $class;?></p>
                <p class="mb-2">เลขที่: <?php echo $number;?></p>
                <p class="mb-2">เพศ: <?php echo $gendd;?></p>
            <a href="index.php" class="btn btn-primary rounded-pill">กลับหน้าหลัก</a>
        </form>
    </div>
</body>
</html>
