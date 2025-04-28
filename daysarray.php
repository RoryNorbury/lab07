<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Days of the Week</title>
</head>
<body>
    <h1>PHP Variables, arrays and operators</h1>
    <?php
        $days_english = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    
        echo "<p>The days of the week in English are:<br>";
        for ($i = 0; $i < 7; $i++) {
            echo $days_english[$i];
            if ($i < 6) {
                echo ", ";
            }
        }
        echo "</p>";

        $days_french = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
    
        echo "<p>The days of the week in French are:<br>";
        for ($i = 0; $i < 7; $i++) {
            echo $days_french[$i];
            if ($i < 6) {
                echo ", ";
            }
        }
        echo "</p>";
    ?>
</body>
</html>
