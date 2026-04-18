<?php
$host = "localhost"; // غالباً يبقى هكذا أو تزودك الاستضافة بعنوان معين
$user = "اسم_المستخدم_الجديد"; 
$pass = "كلمة_السر_الجديدة";
$db   = "اسم_قاعدة_البيانات_الجديدة";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// دالة لجلب الـ IP الحقيقي
function get_client_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// حفظ الـ IP فور دخول المستخدم
$ip = get_client_ip();
$sql = "INSERT INTO visitors (ip_address) VALUES ('$ip')";
$conn->query($sql);
?>
