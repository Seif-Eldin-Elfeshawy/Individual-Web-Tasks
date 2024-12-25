<html>
  <head>
    <title>Exercise2</title>
  </head>
  <body>
    <?php
    $IsLoggedIn = true;
    $UserName = "seif";

    echo "<div style='text-align: center; margin-top: 30%;'>";
    if ($IsLoggedIn) {
        echo "Hello, $UserName";
    } else {
        echo "Hello Stranger";
    }
    echo "</div>";
    ?>
  </body>
</html>