<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ฟอร์มสมัครงาน - บริษัท รวยไม่ จำกัด</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #17C763FF !important;  
    }

    .card-header {
        background-color: #7CF086FF !important; 
        color: white;
    }

    .btn-primary, .btn-success {
        background-color: #6BFFC1FF !important;
        border: none !important;
    }

    .btn-primary:hover, .btn-success:hover {
        background-color: #55EAB8A4 !important;
    }

    .btn-secondary {
        background-color: #08A36AFF !important;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #1CF3BDFF !important;
    }
</style>

</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header text-center">
            <h3>ใบสมัครงาน</h3>
            <h5>บริษัท รวยไม่ จำกัด</h5>
        </div>

        <div class="card-body">
            <form method="post">

                <div class="mb-3">
                    <label class="form-label">ตำแหน่งที่ต้องการสมัคร *</label>
                    <select name="position" class="form-select" required>
                        <option value="">-- เลือกตำแหน่งงาน --</option>
                        <option value="เจ้าหน้าที่ฝ่ายขาย">เจ้าหน้าที่ฝ่ายขาย</option>
                        <option value="แอดมินเพจ">แอดมินเพจ</option>
                        <option value="กราฟิกดีไซน์">กราฟิกดีไซน์</option>
                        <option value="เจ้าหน้าที่การตลาดออนไลน์">เจ้าหน้าที่การตลาดออนไลน์</option>
                        <option value="ช่างภาพ / ตัดต่อวิดีโอ">ช่างภาพ / ตัดต่อวิดีโอ</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">คำนำหน้าชื่อ *</label>
                        <select name="title" class="form-select" required>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                    </div>

                    <div class="col-md-8 mb-3">
                        <label class="form-label">ชื่อ-สกุล *</label>
                        <input type="text" name="fullname" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">วัน/เดือน/ปีเกิด *</label>
                    <input type="date" name="birthday" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ระดับการศึกษา *</label>
                    <select name="education" class="form-select" required>
                        <option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย</option>
                        <option value="ปวช.">ปวช.</option>
                        <option value="ปวส.">ปวส.</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">ความสามารถพิเศษ</label>
                    <textarea name="skill" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">ประสบการณ์ทำงาน</label>
                    <textarea name="experience" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">เบอร์โทรศัพท์ *</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">อีเมล *</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ที่อยู่ปัจจุบัน *</label>
                    <textarea name="address" class="form-control" rows="3" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">ส่งใบสมัคร</button>
                    <button type="reset" class="btn btn-secondary px-4">ล้างข้อมูล</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // รับค่าจากฟอร์ม
    $position   = $_POST['position'];
    $title      = $_POST['title'];
    $fullname   = $_POST['fullname'];
    $birthday   = $_POST['birthday'];
    $education  = $_POST['education'];
    $skill      = $_POST['skill'];
    $experience = $_POST['experience'];
    $phone      = $_POST['phone'];
    $email      = $_POST['email'];
    $address    = $_POST['address'];

    // เรียกไฟล์เชื่อมต่อฐานข้อมูล
    include_once("connectdb.php");

    // คำสั่ง SQL (ปรับชื่อตาราง/ฟิลด์ให้ตรงกับ DB จริง)
    $sql = "INSERT INTO job_register 
    (
        j_id,
        j_position,
        j_title,
        j_fullname,
        j_birthday,
        j_education,
        j_skill,
        j_experience,
        j_phone,
        j_email,
        j_address
    ) 
    VALUES 
    (
        NULL,
        '{$position}',
        '{$title}',
        '{$fullname}',
        '{$birthday}',
        '{$education}',
        '{$skill}',
        '{$experience}',
        '{$phone}',
        '{$email}',
        '{$address}'
    )";

    mysqli_query($conn, $sql) or die("ไม่สามารถบันทึกข้อมูลได้");

    echo "<script>";
    echo "alert('ส่งใบสมัครเรียบร้อยแล้ว');";
    echo "</script>";
}
?>


</body>
</html>
