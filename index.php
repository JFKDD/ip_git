<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>عالم الذكاء الاصطناعي</title>
    <style>
        .hidden-admin-btn {
        position: fixed;
        top: 0;
        right: 0;
        width: 10px; /* مساحة صغيرة جداً */
        height: 10px;
        background: transparent;
        border: none;
        cursor: default;
        z-index: 9999;
        outline: none;
    }
    /* يظهر الزر فقط عند تمرير الماوس فوقه تماماً للمطور */
    .hidden-admin-btn:hover {
        background: rgba(0,0,0,0.01); 
    }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f4f7f6; color: #333; line-height: 1.6; padding: 20px; }
        .container { max-width: 800px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        .ai-card { background: #e8f4fd; border-right: 5px solid #3498db; padding: 15px; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>مرحباً بك في مستقبل التكنولوجيا</h1>
        <p>الذكاء الاصطناعي (AI) هو محاكاة لعمليات الذكاء البشري بواسطة أنظمة الكمبيوتر.</p>
        <a href="login.php" class="hidden-admin-btn" title=""></a>
        <div class="ai-card">
            <h3>تعلم الآلة (Machine Learning)</h3>
            <p>هو فرع من الذكاء الاصطناعي يركز على بناء أنظمة تتعلم من البيانات وتتحسن بمرور الوقت دون برمجة صريحة.</p>
        </div>

        <div class="ai-card">
            <h3>المعالجة الطبيعية للغات (NLP)</h3>
            <p>تكنولوجيا تساعد الحاسوب على فهم وتفسير وتوليد اللغة البشرية كما نفعل نحن.</p>
        </div>
        
        <footer>شكراً لزيارتك لموقعنا التعليمي.</footer>
    </div>
</body>
</html>
