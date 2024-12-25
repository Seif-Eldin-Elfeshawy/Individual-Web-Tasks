<!DOCTYPE html>
<html>
<head>
    <title>Example1</title>
</head>
<body>
    <h1>List of your favorite fruits</h1>
    <ul>
        <?php
            $fruits = array("Apples", "Bananas", "Cherries", "Dates");
            foreach ($fruits as $fruit) {
                echo "<li>$fruit</li>";
            }
        ?>
    </ul>
</body>
</html>
