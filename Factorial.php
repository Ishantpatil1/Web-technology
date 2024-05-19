<!DOCTYPE html>
<html>
<head>
    <title>Factorial Program using Loop in PHP</title>
</head>
<body>

<form method="post">
    Enter the Number:<br>
    <input type="number" name="number" id="no">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fact = 1;
    // Getting value from input text box 'number'
    $n = $_POST['number'];

    echo "Factorial of $n:<br><br>";

    // Start loop
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }

    echo $fact . "<br>";
}
?>

</body>
</html>
