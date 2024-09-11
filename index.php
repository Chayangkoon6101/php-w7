<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chayangkoon6101</title>
    <link href="https://bootswatch.com/5/solar/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mb-4 py-3">
        <form action="echo.php" method="post">
        <h1 class="text-center">ข้อมูล</h1>
        <div class="mb-2">
            <label class="form-label">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" name="name" value="นายชยางกูร ขำเถื่อน">
        </div>
        <div class="mb-2">
            <label class="form-label">ชั้น</label>
            <input type="text" class="form-control" name="class" value="ม.6/10">
        </div>
        <div class="mb-2">
            <label class="form-label">เลขที่</label>
            <input type="text" class="form-control" name="number" value="1">
        </div>
        <div class="mb-2">
            <label class="form-label">เพศ</label>
            <select class="form-select" name="gender">
                <option selected value="1">ชาย</option>
                <option value="2">หญิง</option>
                <option value="3">อื่น ๆ</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary px-4">ส่งข้อมูล</button>
        </form>
    </div>
</body>
</html>
