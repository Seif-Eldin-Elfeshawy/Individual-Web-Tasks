
<!DOCTYPE html>
<html>
<body>
    <h1>do wile example</h1>
    <p>printing numbers from 0 to 6 excluding 3</p>
    <?php
        $i = 0;
        do {
        $i++;
        if ($i == 3) continue;
        echo $i;
        } while ($i < 6);
    ?>
</body>
</html>