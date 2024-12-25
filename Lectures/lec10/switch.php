<!DOCTYPE html>
<html>
<body>
    <h1>switch example</h1>
    <p>Get the day example</p>
    <?php
        $d = 4;
        switch ($d) {
        case 6:
        echo "Today is Saturday";
        break;
        case 0:
        echo "Today is Sunday";
        break;
        default:
        echo "Looking forward to the Weekend";
        }
    ?>
</body>
</html>