<!DOCTYPE html>
<html>
<head>
    <title>Sum of Series Program using Loop in PHP</title>
</head>
<body>

<form method="post">
    Enter the Number of Integers to Sum:<br> 
    <input type="number" name="number" id="no">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sum = 0;
    // Getting value from input text box 'number'
    $n = $_POST['number'];
    echo "Sum of first $n integers:<br><br>";

    // Start loop
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }

    echo $sum . "<br>";
}
?>

</body>
</html>
