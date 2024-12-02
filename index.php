<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="index.php" method="post"> 
            <label for="quantity">Quantity: </label><br>
            <input type="text" id="quantity" name="quantity"/><br>

            <input type="submit" value="Total"/>

            <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["quantity"])) {
                    $item = "Pizza";
                    $price = 5.99;
                    $count = (int)$_POST["quantity"];

                    if ($count > 0) {
                        $total = $price * $count;

                        echo"<p>You have ordered {$count} x {$item}(s) and your total is: \$" . number_format($total, 2) . "</p>";
                    } else {
                        echo"<p>Please enter a valid quantity, cannot be 0 or negative</p>";
                    }
                    
                }
            ?>
        </form>
    </div>
</body>
</html>