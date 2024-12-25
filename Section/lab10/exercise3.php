<!DOCTYPE html>
<html>
<head>
    <title>Exercise3</title>
</head>
<body>
    <h1>Students and their Grades</h1>
    <?php
        function displayStudentGrade($name, $score) {
            echo "<div style=\"padding: 10px; border: 1px solid; margin-bottom: 20px;\">";
            
            echo "<h2>Student Name: $name</h2>";

            switch ($score) {
                case ($score >= 90):
                    echo "<p>Grade: A</p>";
                    break;
                case ($score >= 80):
                    echo "<p>Grade: B</p>";
                    break;
                case ($score >= 70):
                    echo "<p>Grade: C</p>";
                    break;
                case ($score >= 60):
                    echo "<p>Grade: D</p>";
                    break;
                default:
                    echo "<p>Grade: F</p>";
                    break;
            }

            echo "</div>";
        }

        $students = array(
            "Seif" => 95,
            "Ali" => 82,
            "Amr" => 68,
            "Ahmed" => 73,
            "Omar" => 58
        );

        foreach ($students as $name => $score) {
            displayStudentGrade($name, $score);
        }
    ?>
</body>
</html>
