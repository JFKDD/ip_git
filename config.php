<?php
// تفعيل عرض الأخطاء مؤقتاً للتأكد من نجاح العمل
ini_set('display_errors', 1);
error_reporting(E_ALL);

// بيانات Clever Cloud الحقيقية من صورتك
$host = "bdsdtmnvvctt2bgn66ua-mysql.services.clever-cloud.com";
$user = "ugafqtnyw3dl5ct6";
$pass = "lDtxgtyMtyGSbnX7d61R";
$db   = "bdsdtmnvvctt2bgn66ua";
$port = 3306;

// إنشاء الاتصال
$conn = new mysqli($host, $user, $pass, $db, $port);

// فحص الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// دالة جلب الـ IP
function get_client_ip() {
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $_SERVER['REMOTE_ADDR'];
}

$ip = get_client_ip();

// ملاحظة: تأكد أنك أنشأت الجدول في phpMyAdmin قبل تشغيل الكود
$sql = "INSERT INTO visitors (ip_address) VALUES ('$ip')";
$conn->query($sql);
?>