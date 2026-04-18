<?php
// login.php
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    
    if ($password === '12345') {
        // التحويل إلى صفحة الـ admin مع إضافة رمز الوصول البرمجي
        header("Location: admin.php?access=12345");
        exit;
    } else {
        $error = "كلمة السر غير صحيحة!";
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول للمسؤول</title>
    <style>
        body { font-family: sans-serif; background: #f4f7f6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center; }
        input[type="password"] { padding: 10px; width: 200px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; }
        button { padding: 10px 20px; background: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .error { color: red; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h3>دخول الإدارة</h3>
        <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="password" name="password" placeholder="أدخل كلمة السر" required>
            <br>
            <button type="submit">دخول</button>
        </form>
    </div>
</body>
</html>