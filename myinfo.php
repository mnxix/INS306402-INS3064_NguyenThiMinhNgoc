<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin cá nhân</title>
    <style>
        body {
            font-family: Arial;
            background: #f0f0f0;
        }
        .box {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Thông Tin Cá Nhân</h2>
    <?php
        echo "Họ tên: Nguyễn Thị Minh Ngọc <br>";
        echo "Ngày sinh: 19/12/2004 <br>";
        echo "Quê quán: Bắc Ninh <br>";
        echo "Sở thích: Đọc sách, đi du lịch <br><br>";
        echo "Thời gian truy cập: " . date("26/01/2026 10:10:10");
    ?>
</div>

</body>
</html>
