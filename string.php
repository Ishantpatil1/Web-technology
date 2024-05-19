<?php
// Part 1: PHP Array Definition
$people = array(
    array(
        "Name" => "Yash Chaudhari",
        "Age" => 20,
        "Email" => "xyz@gmail.com",
        "City" => "Chalisgaon"
    ),
    array(
        "Name" => "Vansh Gosavi",
        "Age" => 20,
        "Email" => "xyz@gmail.com",
        "City" => "Avadhan"
    )
);

echo "<pre>"; // Optional, makes the output easier to read
print_r($people); // To display the array
echo "</pre>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Character Count in String</title>
</head>
<body>

<form method="post">
    Enter the string:<br>
    <input type="text" name="text" id="text"><br>
    Enter the character to search:<br>
    <input type="text" name="text2" id="text2"><br>
    <input type="submit">
</form>

<?php
// Part 2: Character Count in String
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputStr = $_POST['text'];
    $searchChar = $_POST['text2'];
    $count = 0;

    // Ensure the search character input is valid
    if (strlen($searchChar) == 1) {
        for ($i = 0; $i < strlen($inputStr); $i++) {
            if ($inputStr[$i] == $searchChar) {
                $count++;
            }
        }

        echo "The character '$searchChar' appears $count times in the input string '$inputStr'.";
    } else {
        echo "Please enter a single character to search.";
    }
}
?>

</body>
</html>
