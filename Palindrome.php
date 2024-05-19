<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Check using PHP</title>
</head>
<body>

<form method="post">
    Enter the string:<br>
    <input type="text" name="string" id="string">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST['string'];
    $reversedString = strrev($string);

    if ($string == $reversedString) {
        echo $string . " is a Palindrome<br>Reverse of string: " . $reversedString;
    } else {
        echo $string . " is not a Palindrome<br>Reverse of string: " . $reversedString;
    }
}
?>

</body>
</html>
