<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>เข้าสู่ระบบ</title>
</head>
<body>

<?php
echo "ยินดีต้อนรับ";
echo "<br>";
 $user_name = $_GET["fname"];
echo "ชื่อผู้ใช้ คือ ". $user_name;
echo "<br>";
$user_name = $_GET["pname"];
echo "รหัสผู่ใช้ คือ ". $user_name;
?>



<br>

<br>

<a href="main.html">กลับสู่เมนูหลัก</a>

</body>
</html>