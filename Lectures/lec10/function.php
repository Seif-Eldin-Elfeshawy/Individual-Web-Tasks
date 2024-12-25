<!DOCTYPE html>
<html>
<body>
    <h1>function example</h1>
    <p>simple function to set height value</p>
    <?php
        function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
        }
        setHeight(350);
        setHeight();
        setHeight(135);
        setHeight(80);
    ?>
</body>
</html>