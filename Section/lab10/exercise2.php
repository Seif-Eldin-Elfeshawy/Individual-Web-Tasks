<!DOCTYPE html>
<html>
<head>
    <title>Exercise2</title>
</head>
<body>
    <h1>Families and their information</h1>
        <?php
            function displayFamilyInformation($name, $year) {
                echo "<div style=\"padding: 10px; border: 1px solid; margin-bottom: 20px;\">";

                echo "<h2>Family name is $name.</h2>";

                echo "<p>This family was born in $year.</p>";

                echo "</div>";
            }

            // Array of families 
            $families = array(
                "First family" => 1920,
                "Second family" => 1930,
                "Third family" => 1940,
            );

            foreach ($families as $name => $year) {
                displayFamilyInformation($name, $year);
            }
        ?>
</body>
</html>
