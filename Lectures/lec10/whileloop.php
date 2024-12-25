<!DOCTYPE html>
<html>
<body>
    <h1>while example</h1>
    <p>printing numbers from 0 to 100 with increment by 10</p>
    <?php
        $i = 0;
        while ($i <= 100) {
            echo "The number is $i<br>";
            $i+=10;
        }
    ?>
</body>
</html>