<?php
// Kiểm tra dữ liệu có gửi sang hay chưa
if (
    empty($_POST['full_name']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['message'])
) {
    echo "<h3>❌ Missing Data</h3>";
    echo "<p>Please fill in all fields.</p>";
    exit;
}

// Lấy dữ liệu từ form
$full_name = $_POST['full_name'];
$email     = $_POST['email'];
$phone     = $_POST['phone'];
$message   = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted Data</title>
</head>
<body>

<h2>Submitted Information</h2>

<ul>
    <li><strong>Full Name:</strong> <?php echo $full_name; ?></li>
    <li><strong>Email:</strong> <?php echo $email; ?></li>
    <li><strong>Phone:</strong> <?php echo $phone; ?></li>
    <li><strong>Message:</strong> <?php echo $message; ?></li>
</ul>

</body>
</html>
