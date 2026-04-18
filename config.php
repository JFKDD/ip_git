<?php
// 1. تفعيل إظهار الأخطاء لمعرفة السبب إذا استمرت المشكلة
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. استخدام المتغيرات التلقائية من Clever Cloud (أفضل وأضمن طريقة)
$host = getenv('MYSQL_ADDON_HOST');
$user = getenv('MYSQL_ADDON_USER');
$pass = getenv('MYSQL_ADDON_PASSWORD');
$db   = getenv('MYSQL_ADDON_DB');
$port = getenv('MYSQL_ADDON_PORT');

// 3. إنشاء الاتصال
$conn = new mysqli($host, $user, $pass, $db, $port);

// 4. فحص إذا كان الاتصال ناجحاً
if ($conn->connect_error) {
    die("خطأ في الاتصال بقاعدة البيانات");
}

// 5. دالة جلب عنوان IP الزائر
function get_client_ip() {
    return $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
}

$ip = get_client_ip();

// 6. تسجيل الزيارة (تأكد من إنشاء الجدول في phpMyAdmin)
$sql = "INSERT INTO visitors (ip_address) VALUES ('$ip')";
$conn->query($sql);
?>
