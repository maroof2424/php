<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" placeholder="First Number">
        <input type="number" name="num2" placeholder="Second Number">

        <select name="operator">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>

        <input type="submit" value="Calculate" name="calculate">

        <?php
        if(isset($_POST['calculate'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $op = $_POST['operator'];

            if($op == 'add') {
                $result = $num1 + $num2;
            } elseif($op == 'sub') {
                $result = $num1 - $num2;
            } elseif($op == 'mul') {
                $result = $num1 * $num2;
            } elseif ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero!";
            }
            echo "<h3>Result: $result</h3>";
        }
        ?>
    </form>
</body>
</html>