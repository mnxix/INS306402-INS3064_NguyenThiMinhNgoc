<?php
// Số lần đăng nhập sai
$failed_attempts = 0;
$message = "";

// Khi bấm nút Login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? "";
    $password = $_POST['password'] ?? "";
    $failed_attempts = $_POST['failed_attempts'] ?? 0;

    // Thông tin đúng
    $correct_user = "admin";
    $correct_pass = "123456";

    if ($username === $correct_user && $password === $correct_pass) {
        $message = "✅ Login Successful!";
    } else {
        $failed_attempts++;
        $message = "❌ Invalid Credentials. Failed Attempts: $failed_attempts";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    <label>
        Username:
        <input type="text" name="username">
    </label>
    <br><br>

    <label>
        Password:
        <input type="password" name="password">
    </label>
    <br><br>

    <!-- Hidden field để đếm số lần sai -->
    <input type="hidden" name="failed_attempts" value="<?php echo $failed_attempts; ?>">

    <button type="submit">Login</button>
</form>

<br>

<?php
if ($message) {
    echo "<p>$message</p>";
}
?>

</body>
</html>
