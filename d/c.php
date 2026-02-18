<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>Pongphat Thawandee - ฟอร์มสมัครสมาชิก</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --danger: #ef4444;
            --bg: #0f172a;
            --card-bg: #ffffff;
            --border: #e5e7eb;
            --text-main: #111827;
            --text-muted: #6b7280;
            --radius: 16px;
            --shadow-soft: 0 18px 45px rgba(15, 23, 42, 0.18);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: radial-gradient(circle at top left, #1d4ed8 0, #0f172a 40%, #020617 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 16px;
            color: var(--text-main);
        }

        .card {
            width: 100%;
            max-width: 720px;
            background: rgba(255, 255, 255, 0.97);
            border-radius: var(--radius);
            box-shadow: var(--shadow-soft);
            padding: 28px 28px 24px;
            backdrop-filter: blur(10px);
        }

        @media (min-width: 768px) {
            .card {
                padding: 32px 36px 28px;
            }
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            gap: 8px;
            margin-bottom: 18px;
            border-bottom: 1px solid var(--border);
            padding-bottom: 14px;
        }

        .card-title {
            font-size: 1.4rem;
            font-weight: 700;
            letter-spacing: 0.02em;
            color: #0f172a;
        }

        .card-subtitle {
            font-size: 0.82rem;
            color: var(--text-muted);
            text-align: right;
        }

        form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 14px 18px;
        }

        @media (min-width: 640px) {
            form {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        /* full-width items */
        .full {
            grid-column: 1 / -1;
        }

        label {
            font-size: 0.88rem;
            font-weight: 600;
            color: #111827;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .required {
            color: var(--danger);
            font-size: 0.88rem;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        textarea,
        select {
            padding: 9px 11px;
            border-radius: 10px;
            border: 1px solid var(--border);
            font-size: 0.95rem;
            transition: border-color 0.18s ease, box-shadow 0.18s ease, background-color 0.18s ease;
            background-color: #f9fafb;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: var(--primary);
            background-color: #ffffff;
            box-shadow: 0 0 0 1px rgba(37, 99, 235, 0.2);
        }

        textarea {
            resize: vertical;
            min-height: 80px;
            max-height: 180px;
        }

        input[type="color"] {
            width: 56px;
            height: 32px;
            padding: 0;
            border-radius: 999px;
            border: 1px solid var(--border);
            background-color: #f9fafb;
            cursor: pointer;
        }

        .color-row {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .color-preview {
            flex: 1;
            font-size: 0.8rem;
            color: var(--text-muted);
        }

        .helper-text {
            font-size: 0.78rem;
            color: var(--text-muted);
        }

        .footer {
            grid-column: 1 / -1;
            margin-top: 10px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: space-between;
            align-items: center;
        }

        .btn-row {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        button {
            border: none;
            padding: 9px 14px;
            border-radius: 999px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.08s ease, box-shadow 0.12s ease, background-color 0.16s ease, opacity 0.16s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            white-space: nowrap;
        }

        button:active {
            transform: translateY(1px) scale(0.99);
            box-shadow: none;
        }

        .btn-primary {
            background: var(--primary);
            color: #ffffff;
            box-shadow: 0 10px 20px rgba(37, 99, 235, 0.25);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--border);
            color: #111827;
        }

        .btn-outline:hover {
            background: #f9fafb;
        }

        .btn-ghost {
            background: transparent;
            color: var(--text-muted);
        }

        .btn-ghost:hover {
            background: #f3f4f6;
        }

        .btn-danger {
            background: #fee2e2;
            color: #b91c1c;
        }

        .btn-danger:hover {
            background: #fecaca;
        }

        hr {
            margin: 22px 0 14px;
            border: none;
            border-top: 1px solid #e5e7eb;
        }

        .result-title {
            font-weight: 600;
            margin-bottom: 6px;
        }

        .result-box {
            background: #f9fafb;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            padding: 12px 14px;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .result-row {
            margin-bottom: 4px;
        }
    </style>

</head>

<body>
<div class="card">
    <div class="card-header">
        <div class="card-title">ฟอร์มสมัครสมาชิกออนไลน์ BY Gemini</div>
        <div class="card-subtitle">
            พงษ์พัฒน์ ถาวันดี · 66010914012
        </div>
    </div>

    <form method="post" action="">
        <!-- ชื่อ-สกุล -->
        <div class="form-group full">
            <label for="fullname">
                ชื่อ-สกุล
                <span class="required">*</span>
            </label>
            <input type="text" id="fullname" name="fullname" autofocus required placeholder="กรอกชื่อ-สกุลของคุณ">
        </div>

        <!-- เบอร์โทร -->
        <div class="form-group">
            <label for="phone">
                เบอร์โทร
                <span class="required">*</span>
            </label>
            <input type="text" id="phone" name="phone" required placeholder="เช่น 08x-xxx-xxxx">
        </div>

        <!-- ส่วนสูง -->
        <div class="form-group">
            <label for="height">
                ส่วนสูง (ซม.)
                <span class="required">*</span>
            </label>
            <input type="number" id="height" name="height" min="120" max="200" placeholder="เช่น 170">
            <span class="helper-text">ระหว่าง 120–200 เซนติเมตร</span>
        </div>

        <!-- วันเดือนปีเกิด -->
        <div class="form-group">
            <label for="birthday">วันเดือนปีเกิด</label>
            <input type="date" id="birthday" name="birthday">
        </div>

        <!-- สาขาวิชา -->
        <div class="form-group">
            <label for="major">สาขาวิชา</label>
            <select id="major" name="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การตลาด">การตลาด</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="คอมพิวเตอร์ธุรกิจ" selected>คอมพิวเตอร์ธุรกิจ</option>
            </select>
        </div>

        <!-- สีที่ชอบ -->
        <div class="form-group">
            <label for="color">สีที่ชอบ</label>
            <div class="color-row">
                <input type="color" id="color" name="color">
                <div class="color-preview">เลือกสีเพื่อแสดงในผลลัพธ์</div>
            </div>
        </div>

        <!-- ที่อยู่ -->
        <div class="form-group full">
            <label for="address">ที่อยู่</label>
            <textarea id="address" name="address" cols="40" rows="4" placeholder="กรอกที่อยู่ปัจจุบันของคุณ"></textarea>
        </div>

        <!-- footer / buttons -->
        <div class="footer">
            <div class="helper-text">
                <span class="required">*</span> จำเป็นต้องกรอก
            </div>

            <div class="btn-row">
                <button type="submit" name="submit" class="btn-primary">
                    สมัครสมาชิก
                </button>
                <button type="reset" class="btn-outline">
                    ล้างข้อมูล
                </button>
                <button type="button" class="btn-ghost"
                        onclick="window.location='https://www.msu.ac.th'">
                    ไปยังเว็บไซต์มหาวิทยาลัย
                </button>
                <button type="button" class="btn-danger"
                        onmouseover="alert('สวัสดีจร้าาาา')">
                    อย่ากดนะ
                </button>
                <button type="button" class="btn-ghost"
                        onclick="window.print()">
                    พิมพ์หน้านี้
                </button>
            </div>
        </div>
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $color = $_POST['color'];
        $major = $_POST['major'];

        echo '<div class="result-title">ผลการบันทึกข้อมูล</div>';
        echo '<div class="result-box">';
        echo '<div class="result-row">ชื่อ-สกุล: ' . htmlspecialchars($fullname) . '</div>';
        echo '<div class="result-row">เบอร์โทร: ' . htmlspecialchars($phone) . '</div>';
        echo '<div class="result-row">ส่วนสูง: ' . htmlspecialchars($height) . ' ซม.</div>';
        echo '<div class="result-row">ที่อยู่: ' . nl2br(htmlspecialchars($address)) . '</div>';
        echo '<div class="result-row">ว/ด/ป เกิด: ' . htmlspecialchars($birthday) . '</div>';
        echo '<div class="result-row">สีที่ชอบ:</div>';
        echo "<div class=\"result-row\" style=\"margin:6px 0 10px;\">";
        echo "<div style=\"background-color:{$color}; width:100%; max-width:300px; height:28px; border-radius:999px; border:1px solid #e5e7eb;\"></div>";
        echo "<div style=\"font-size:0.8rem; color:#6b7280; margin-top:3px;\">โค้ดสี: " . htmlspecialchars($color) . "</div>";
        echo "</div>";
        echo '<div class="result-row">สาขาวิชา: ' . htmlspecialchars($major) . '</div>';
        echo '</div>';
    }
    ?>
</div>
</body>
</html>
