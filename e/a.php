<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914012 พงษ์พัฒน์ ถาวันดี (ทีม)</title>

<style>
    body {
        font-family: "Prompt", sans-serif;
        background-color: #17C763FF ; 
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        padding: 20px;
        color: #7CF086FF;
    }

    .container {
        width: 500px;
        margin: auto;
        background: #ffffff;
        padding: 20px 30px;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    input, textarea, select {
        width: 100%;
        padding: 8px;
        margin: 8px 0 15px 0;
        border-radius: 8px;
        border: 1px solid #6BFFC1FF;
        font-size: 16px;
    }

    button {
        background-color: #55EAB8A4;
        border: none;
        padding: 10px 15px;
        border-radius: 8px;
        color: white;
        cursor: pointer;
        margin-right: 5px;
        transition: 0.2s;
    }

    button:hover {
        background-color: #4aa08A36AFF3f0;
    }

    hr {
        margin-top: 40px;
    }

    .output-box {
        width: 500px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
</style>
</head>

<body>

<h1>ฟอร์มรับข้อมูล - พงษ์พัฒน์ ถาวันดี (ทีม) by GPT</h1>

<div class="container">
<form method="post" action="">
ชื่อ-สกุล * <input type="text" name="fullname" autofocus required>

เบอร์โทร * <input type="text" name="phone" required>

ส่วนสูง (ซม.) *  
<input type="number" name="height" min="100" max="200" required>

ที่อยู่  
<textarea name="address" cols="40" rows="4"></textarea>

วัน/เดือน/ปีเกิด  
<input type="date" name="birthday">

สีที่ชอบ  
<input type="color" name="color">

สาขาวิชา  
<select name="major">
	<option value="การบัญชี">การบัญชี</option>
	<option value="การตลาด">การตลาด</option>
	<option value="การจัดการ">การจัดการ</option>
	<option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
</select>

<br>

<button type="submit" name="Submit">สมัครสมาชิก</button>
<button type="reset">ยกเลิก</button>
<button type="button" onClick="window.location='https://www.msu.ac.th'">Go to MSU</button>
<button type="button" onMouseOver="alert('ใครคะ??')">Hello</button>
<button type="button" onClick="window.print()">พิมพ์</button>

</form>
</div>

<hr>

<?php
if (isset($_POST['Submit'])) {
	echo "<div class='output-box'>";
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$birthday = $_POST['birthday'];
	$height = $_POST['height'];
	$major = $_POST['major'];
	$color = $_POST['color'];

    include_once("connectdb.php");

    $sql = "INSERT INTO register (r_id, r_name, r_phone, r_height, r_address, r_birthday, r_color, r_major) VALUES (NULL, '{$fullname}','{$phone}','{$height}','{$address}','{$birthday}','{$color}','{$major}');";
    mysqli_query($conn,$sql) or die ("insert ไม่ได้");

    echo "<script>";
    echo "alert('บันทึกข้อมูลสำเร็จ');";
    echo "</script>";

}
?>

</body>
</html>
