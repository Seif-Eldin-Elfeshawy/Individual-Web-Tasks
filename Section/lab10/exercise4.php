<!DOCTYPE html>
<html>
<head>
    <title>Exercise4</title>
</head>
<body>
    <h1>Factorial of Numbers</h1>
    <?php
        function calculateFactorial($number) {
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        }

        $numbers = array(1, 2, 3, 4, 5);

        foreach ($numbers as $number) {
            $factorial = calculateFactorial($number);
            echo "<div style=\"padding: 10px; border: 1px solid red; margin-bottom: 20px;\">";
            echo "<h2>Number: $number</h2>";
            echo "<p>Factorial: $factorial</p>";
            echo "</div>";
        }
    ?>
</body>
</html>
