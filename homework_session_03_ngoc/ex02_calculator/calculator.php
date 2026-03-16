<?php
$result = "";
$error  = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['operator'];

    // Kiểm tra có phải số không
    if (!is_numeric($num1) || !is_numeric($num2)) {
        $error = "❌ Please enter valid numbers.";
    } else {
        switch ($op) {
            case '+':
                $result = "$num1 + $num2 = " . ($num1 + $num2);
                break;

            case '-':
                $result = "$num1 - $num2 = " . ($num1 - $num2);
                break;

            case '*':
                $result = "$num1 * $num2 = " . ($num1 * $num2);
                break;

            case '/':
                if ($num2 == 0) {
                    $error = "❌ Cannot divide by zero.";
                } else {
                    $result = "$num1 / $num2 = " . ($num1 / $num2);
                }
                break;

            default:
                $error = "❌ Invalid operation.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>

<h2>Arithmetic Calculator</h2>

<form method="post">
    <input type="text" name="num1" placeholder="Number 1">
    
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="text" name="num2" placeholder="Number 2">

    <button type="submit">Calculate</button>
</form>

<br>

<?php
if ($error) {
    echo "<p style='color:red;'>$error</p>";
}

if ($result) {
    echo "<p style='color:green;'><strong>$result</strong></p>";
}
?>

</body>
</html>

