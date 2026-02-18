<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ผลการสมัครงาน - CloudSoft Asia Co., Ltd.</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white text-center">
            <h3>ผลการส่งใบสมัครงาน</h3>
        </div>

        <div class="card-body">

<?php
if ($_POST) {
    echo "<h4 class='text-primary'>ข้อมูลผู้สมัคร</h4><hr>";

    echo "<strong>ตำแหน่งที่ต้องการสมัคร:</strong> " . $_POST['position'] . "<br>";
    echo "<strong>คำนำหน้า:</strong> " . $_POST['title'] . "<br>";
    echo "<strong>ชื่อ-สกุล:</strong> " . $_POST['fullname'] . "<br>";
    echo "<strong>วันเดือนปีเกิด:</strong> " . $_POST['birthday'] . "<br>";
    echo "<strong>ระดับการศึกษา:</strong> " . $_POST['education'] . "<br>";
    echo "<strong>ความสามารถพิเศษ:</strong> " . nl2br($_POST['skill']) . "<br>";
    echo "<strong>ประสบการณ์ทำงาน:</strong> " . nl2br($_POST['experience']) . "<br>";
    echo "<strong>โทรศัพท์:</strong> " . $_POST['phone'] . "<br>";
    echo "<strong>อีเมล:</strong> " . $_POST['email'] . "<br>";
    echo "<strong>ที่อยู่:</strong> " . nl2br($_POST['address']) . "<br>";
    echo "<strong>ข้อมูลอื่นๆ ที่จำเป็น:</strong> " . nl2br($_POST['other']) . "<br>";
} else {
    echo "<div class='alert alert-warning'>ยังไม่มีข้อมูลที่ส่งมาจากแบบฟอร์ม</div>";
}
?>

        </div>

        <div class="card-footer text-center">
            <a href="e.php" class="btn btn-primary">กลับไปหน้าแบบฟอร์ม</a>
        </div>

    </div>
</div>

</body>
</html>
