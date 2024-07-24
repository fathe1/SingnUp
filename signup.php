<?php
$servername = "localhost";
$username = "root";
$password = "";  // املأ كلمة المرور الخاصة بك هنا إذا كانت موجودة
$dbname = "signup_db";

// إنشاء الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// الحصول على البيانات من النموذج
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

// تشفير كلمة المرور
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// إدراج البيانات في قاعدة البيانات
$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "تم التسجيل بنجاح!";
} else {
    echo "خطأ: " . $sql . "<br>" . $conn->error;
}

// إغلاق الاتصال
$conn->close();
?>
