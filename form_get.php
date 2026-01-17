<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
</head>
<body>
    <h2>Tìm kiếm</h2>
    <form method="GET" action="">
    <input type="text" name="keyword" placeholder="Nhập từ khoá">
    <button type="submit">Tìm kiếm</button>

    </form>

        <?php 
            if (isset($_GET['keyword']) && $_GET['keyword'] != "") {
            $keyword = $_GET['keyword'];
            echo "<p>Bạn đang tìm kiếm từ khóa: <b>$keyword</b></p>";
            }
        ?>
</body>
</html>