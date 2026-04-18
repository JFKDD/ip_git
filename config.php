<?php
// بيانات الاتصال من Clever Cloud
<?php
$host = "bdsdtmnvvctt2bgn66ua-mysql.services.clever-cloud.com";
$user = "ugafqtnyw3dl5ct6";
$pass = "lDtxgtyMtyGSbnX7d61R";
$db   = "bdsdtmnvvctt2bgn66ua";
$port = 3306; // أضف المنفذ هنا

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
// ... بقية الكود
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