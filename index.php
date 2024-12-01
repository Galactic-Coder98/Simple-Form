<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post"> 
        <label>Quantity: </label><br>
        <input type="text" name="quantity"/><br>

        <input type="submit" value="total"/>
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["quantity"])) {
        $item = "Pizza";
        $price = 5.99;
        $count = (int)$_POST["quantity"];

        if ($count > 0) {
            $total = $price * $count;

            echo"<p>You have ordered {$count} x {$item}(s) and your total is: \$" . number_format($total, 2) . "</p>";
        } else {
            echo"<p>Please enter a valid quantity.</p>";
        }
        
    }
?>