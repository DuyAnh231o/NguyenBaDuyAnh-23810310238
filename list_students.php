<?php
    include("db_connect.php");

    $sql = "select * from students ";
     $stmt = $conn->prepare($sql);
        $stmt->execute();

    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            margin: 0 5px;
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Danh sách sinh viên</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Họ tên</th>
        <th>Mã SV</th>
        <th>Email</th>
        <th>Hành động</th>
    </tr>

    <?php foreach ($students as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['fullname'] ?></td>
            <td><?= $row['student_code'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="#">Sửa</a> |
                <a href="#">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>