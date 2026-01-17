<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form đăng kí</title>
</head>
<body>
    <h2>Form đăng kí</h2>

    <form method="POST" action="">
        <label>Tên:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Mật khẩu:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Đăng ký</button>
    </form>

    <?php
        if (isset($_POST['username']) && $_POST['username'] != "") {
            $name = $_POST['username'];
            echo "<p>Đã nhận thông tin của <b>$name</b></p>";
        }
    ?>
</body>
</html>