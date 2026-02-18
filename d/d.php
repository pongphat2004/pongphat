<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Professional Form - Pongphat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    :root {
        --bg: #f5f7fa;
        --card-bg: #ffffff;
        --border: #d1d5db;
        --text-main: #1f2937;
        --text-muted: #6b7280;
        --primary: #10b981;
        --primary-dark: #059669;
        --radius: 18px;
        --shadow: 0 10px 28px rgba(0,0,0,0.08);
    }

    body {
        margin: 0;
        background: var(--bg);
        font-family: "Segoe UI", Tahoma, sans-serif;
        display: flex;
        justify-content: center;
        padding: 30px 15px;
        color: var(--text-main);
    }

    .container {
        width: 100%;
        max-width: 760px;
        background: var(--card-bg);
        padding: 34px;
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        border: 1px solid #f0f0f0;
    }

    .title {
        font-size: 1.6rem;
        font-weight: 700;
        margin-bottom: 4px;
        color: var(--text-main);
    }

    .subtitle {
        font-size: 0.9rem;
        color: var(--text-muted);
        margin-bottom: 20px;
    }

    form {
        display: grid;
        gap: 18px;
    }

    label {
        font-weight: 600;
        font-size: 0.95rem;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    textarea,
    select {
        width: 100%;
        padding: 11px 13px;
        border-radius: 12px;
        border: 1px solid var(--border);
        background: #f9fafb;
        font-size: 0.95rem;
        transition: all .2s ease;
    }

    input:focus,
    select:focus,
    textarea:focus {
        border-color: var(--primary);
        background: #fff;
        outline: none;
        box-shadow: 0 0 0 3px rgba(16,185,129,0.18);
    }

    textarea {
        resize: vertical;
        min-height: 80px;
    }

    .color-box {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    input[type="color"] {
        width: 55px;
        height: 36px;
        border-radius: 8px;
        border: 1px solid var(--border);
        padding: 0;
        cursor: pointer;
    }

    .btn-row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 12px;
    }

    button {
        border: none;
        padding: 10px 18px;
        font-size: 0.9rem;
        border-radius: 999px;
        cursor: pointer;
        font-weight: 600;
        transition: 0.18s;
    }

    .btn-primary {
        background: var(--primary);
        color: white;
    }
    .btn-primary:hover {
        background: var(--primary-dark);
    }

    .btn-outline {
        background: transparent;
        border: 1px solid var(--border);
    }
    .btn-outline:hover {
        background: #f3f4f6;
    }

    .btn-soft {
        background: #e5e7eb;
        color: #374151;
    }
    .btn-soft:hover {
        background: #d1d5db;
    }

    .result-box {
        margin-top: 26px;
        background: #f9fafb;
        border: 1px solid #e5e7eb;
        padding: 16px;
        border-radius: 14px;
        line-height: 1.6;
    }

</style>
</head>

<body>
<div class="container">

    <div class="title">ฟอร์มสมัครสมาชิก BY GPT</div>
    <div class="subtitle">พงษ์พัฒน์ ถาวันดี · 66010914012</div>

    <form method="post">

        <div>
            <label>ชื่อ-สกุล *</label>
            <input type="text" name="fullname" required placeholder="กรอกชื่อ-สกุล">
        </div>

        <div>
            <label>เบอร์โทร *</label>
            <input type="text" name="phone" required placeholder="เช่น 08x-xxx-xxxx">
        </div>

        <div>
            <label>ส่วนสูง (ซม.) *</label>
            <input type="number" name="height" min="120" max="200" placeholder="เช่น 170">
        </div>

        <div>
            <label>วันเดือนปีเกิด</label>
            <input type="date" name="birthday">
        </div>

        <div>
            <label>สาขาวิชา</label>
            <select name="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การตลาด">การตลาด</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
            </select>
        </div>

        <div>
            <label>สีที่ชอบ</label>
            <div class="color-box">
                <input type="color" name="color">
                <span style="color: var(--text-muted); font-size: 0.85rem;">เลือกสีที่คุณชอบ</span>
            </div>
        </div>

        <div>
            <label>ที่อยู่</label>
            <textarea name="address" placeholder="กรอกที่อยู่ของคุณ"></textarea>
        </div>

        <div class="btn-row">
            <button type="submit" name="submit" class="btn-primary">สมัครสมาชิก</button>

            <button type="reset" class="btn-outline">ล้างข้อมูล</button>

            <button type="button" class="btn-soft"
                onclick="window.location='https://www.msu.ac.th'">
                ไปยังเว็บไซต์ มมส
            </button>

            <button type="button" class="btn-outline" onclick="window.print()">พิมพ์</button>

            <button type="button" class="btn-soft" 
                onmouseover="alert('สวัสดีครับ 😊');">
                อย่าสัมผัสนะ
            </button>
        </div>

    </form>

    <hr style="margin: 30px 0; border: none; border-top: 1px solid #e5e7eb;">

    <?php
    if(isset($_POST['submit'])) {
        echo "<div class='result-box'>";
        echo "<strong>ผลการบันทึกข้อมูล</strong><br><br>";

        echo "ชื่อ-สกุล: " . htmlspecialchars($_POST['fullname']) . "<br>";
        echo "เบอร์โทร: " . htmlspecialchars($_POST['phone']) . "<br>";
        echo "ส่วนสูง: " . htmlspecialchars($_POST['height']) . " ซม.<br>";
        echo "วันเกิด: " . htmlspecialchars($_POST['birthday']) . "<br>";
        echo "สาขาวิชา: " . htmlspecialchars($_POST['major']) . "<br><br>";

        echo "สีที่ชอบ:<br>";
        echo "<div style='width:140px; height:30px; border-radius:8px; border:1px solid #ccc; background:" . htmlspecialchars($_POST['color']) . ";'></div>";
        echo "<small style='color:#6b7280;'>โค้ดสี: " . htmlspecialchars($_POST['color']) . "</small><br><br>";

        echo "ที่อยู่:<br>" . nl2br(htmlspecialchars($_POST['address'])) . "<br>";
        echo "</div>";
    }
    ?>

</div>
</body>
</html>
