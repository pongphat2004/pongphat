<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <title>แบบฟอร์มสมัครงาน - CloudSoft Asia Co., Ltd.</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #f7f9fc;
      font-family: "Segoe UI", system-ui, sans-serif;
    }
    .card {
      border-radius: 20px;
    }
    .card-header {
      border-radius: 20px 20px 0 0 !important;
    }
    .required::after {
      content: " *";
      color: #dc3545;
    }
  </style>
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-primary text-white text-center">
      <h3>แบบฟอร์มสมัครงาน</h3>
      <small>CloudSoft Asia Co., Ltd.</small>
    </div>

    <div class="card-body">

      <form method="post" action="f.php">

        <!-- ตำแหน่งและการศึกษา -->
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label required">ตำแหน่งที่ต้องการสมัคร</label>
            <select name="position" class="form-select" required>
              <option value="">-- เลือกตำแหน่ง --</option>
              <option>Software Engineer</option>
              <option>Frontend Developer</option>
              <option>Backend Developer</option>
              <option>UI/UX Designer</option>
              <option>IT Support</option>
              <option>Cloud Engineer</option>
              <option>Marketing Executive</option>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label required">ระดับการศึกษา</label>
            <select name="education" class="form-select" required>
              <option value="">-- เลือกระดับการศึกษา --</option>
              <option>มัธยมปลาย</option>
              <option>ปวช.</option>
              <option>ปวส.</option>
              <option>ปริญญาตรี</option>
              <option>ปริญญาโท</option>
              <option>ปริญญาเอก</option>
            </select>
          </div>
        </div>

        <!-- ข้อมูลส่วนตัว -->
        <div class="row mb-3">
          <div class="col-md-3">
            <label class="form-label required">คำนำหน้า</label>
            <select name="title" class="form-select" required>
              <option>นาย</option>
              <option>นางสาว</option>
              <option>นาง</option>
            </select>
          </div>
          <div class="col-md-9">
            <label class="form-label required">ชื่อ-สกุล</label>
            <input type="text" name="fullname" class="form-control" placeholder="เช่น สมชาย ใจดี" required>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-4">
            <label class="form-label required">วันเดือนปีเกิด</label>
            <input type="date" name="birthday" class="form-control" required>
          </div>
          <div class="col-md-4">
            <label class="form-label required">โทรศัพท์</label>
            <input type="text" name="phone" class="form-control" placeholder="08x-xxx-xxxx" required>
          </div>
          <div class="col-md-4">
            <label class="form-label required">อีเมล</label>
            <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
          </div>
        </div>

        <!-- ความสามารถ/ประสบการณ์ -->
        <div class="mb-3">
          <label class="form-label required">ความสามารถพิเศษ</label>
          <textarea name="skill" class="form-control" rows="3" placeholder="เช่น เขียนโปรแกรม, ใช้ Photoshop, ภาษาอังกฤษดีเยี่ยม" required></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">ประสบการณ์ทำงาน</label>
          <textarea name="experience" class="form-control" rows="4" placeholder="ระบุบริษัทเดิม, ตำแหน่ง, ระยะเวลา และหน้าที่โดยสรุป (ถ้ามี)"></textarea>
        </div>

        <!-- ที่อยู่ -->
        <div class="mb-3">
          <label class="form-label">ที่อยู่ปัจจุบัน</label>
          <textarea name="address" class="form-control" rows="3" placeholder="บ้านเลขที่, ถนน, ตำบล/แขวง, อำเภอ/เขต, จังหวัด, รหัสไปรษณีย์"></textarea>
        </div>

        <!-- อื่นๆ ที่จำเป็น -->
        <div class="mb-3">
          <label class="form-label">ข้อมูลอื่นๆ ที่จำเป็น</label>
          <textarea name="other" class="form-control" rows="3" placeholder="เช่น เงินเดือนที่คาดหวัง, วันที่พร้อมเริ่มงาน, ลิงก์ Portfolio ฯลฯ"></textarea>
        </div>

        <div class="text-center mt-4">
          <button type="reset" class="btn btn-outline-secondary me-2">ล้างข้อมูล</button>
          <button type="submit" class="btn btn-primary">ส่งใบสมัคร</button>
        </div>

      </form>

    </div>
  </div>
</div>

</body>
</html>
