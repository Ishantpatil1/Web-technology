<!DOCTYPE html>
<html>
<head>
    <title>Pyramid using PHP</title>
</head>
<body>

<?php
$n = 50; // You can adjust this value to change the size of the pyramid

for ($i = 0; $i < $n; $i++) {
    // Print leading spaces
    for ($j = 0; $j < ($n - $i - 1); $j++) {
        echo "&nbsp;";
    }

    // Print the pyramid pattern
    for ($j = 0; $j <= $i; $j++) {
        echo "*&nbsp;";
    }

    // Move to the next line
    echo "<br>";
}
?>

</body>
</html>
