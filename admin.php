<?php
include('config.php');

// شرط الوصول: يجب وجود كلمة '12345' في الرابط
if (!isset($_GET['access']) || $_GET['access'] !== '12345') {
    header("HTTP/1.1 404 Not Found");
    echo "<h1>404 Not Found</h1> الصفحة غير موجودة.";
    exit;
}

$result = $conn->query("SELECT * FROM visitors ORDER BY visit_time DESC");
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لوحة التحكم</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: center; }
        th { background-color: #2c3e50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>سجل الزوار (عناوين الـ IP)</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>عنوان الـ IP</th>
            <th>وقت الزيارة</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['ip_address']; ?></td>
            <td><?php echo $row['visit_time']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
