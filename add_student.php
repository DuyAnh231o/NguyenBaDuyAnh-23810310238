<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include "db_connect.php";

    $hoten = $_POST['fullname'];
    $msv   = $_POST['student_code'];
    $email = $_POST['email'];

    try {
        $sql = "INSERT INTO `student` (fullname, student_code, email)
                VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$hoten, $msv, $email]);

        $success = "Người dùng mới đã được thêm!";
    } catch (PDOException $e) {
       echo "Lỗi SQL: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên</title>
</head>
<body>

<h2>Thêm sinh viên</h2>

<form method="POST" action="">
    <label>Họ tên:</label><br>
    <input type="text" name="fullname" required><br><br>

    <label>Mã SV:</label><br>
    <input type="text" name="student_code" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit">Thêm mới</button>
</form>

<?php
if (isset($success)) {
    echo "<p style='color:green;'>$success</p>";
}
?>

</body>
</html>
