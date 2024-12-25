<html>
  <head>
    <title>Exercise1</title> 
  </head>
  <body>
    <ul>
      <?php
        $names = ["seif", "Ali","Ahmed", "Mohamed", "Khaled", "Hassan"];
        $age = [10, 20, 30, 40, 50, 60];
        $len = count($names);

        for ( $i = 0; $i < $len; $i++ ) {
      ?>
        <li><?= "Student-".$i." = Name: ". $names[$i] . " , Age : ". $age[$i] ?></li>
      <?php
        }
      ?>
    </ul>
  </body>
</html>
