<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>พงษ์พัฒน์ ถาวันดี (ทีม)</title>
</head>

<body>
<h1> 66010914012พงษ์พัฒน์ ถาวันดี (ทีม)</h1>


<style>
    body {
        text-align: center;
        font-family: Arial, sans-serif;
        margin-top: 50px;
    }

    button {
        padding: 12px 25px;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        margin: 10px;
    }

    .btn-green {
        background-color: #28a745;
        color: white;
    }

    .btn-yellow {
        background-color: #ffc107;
        color: black;
    }

    img {
        margin-top: 20px;
        width: 300px;
        height: auto;
        display: none;
        border-radius: 10px;
    }
</style>
</head>
<body>

<h2>กดปุ่มเพื่อแสดงรูป</h2>

<button class="btn-green" onclick="showMe()">แสดงรูปตัวเอง</button>
<button class="btn-yellow" onclick="showTeacher()">แสดงรูปอาจารย์</button>

<br>

<img id="myPhoto" src="2.jpeg" alt="รูปตัวเอง">
<img id="teacherPhoto" src="1.jpeg" alt="รูปอาจารย์">

<script>
function showMe() {
    document.getElementById("myPhoto").style.display = "block";
    document.getElementById("teacherPhoto").style.display = "none";
}

function showTeacher() {
    document.getElementById("teacherPhoto").style.display = "block";
    document.getElementById("myPhoto").style.display = "none";
}
</script>

</body>
</html>

</body>
</html>