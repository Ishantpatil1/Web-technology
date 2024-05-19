<?php
$users = array(
    array(
        "Name" => "Ganesh Gawall",
        "Age" => 20,
        "Email" => "xyz@gmail.com",
        "City" => "Chittod"
    ),
    array(
        "Name" => "Hritik Gayakwad",
        "Age" => 20,
        "Email" => "xyz@gmail.com",
        "City" => "Shirud"
    )
);

echo "Users information: <br>";

foreach($users as $user) {
    echo "Name: " . $user["Name"] . "<br>";
    echo "Age: " . $user["Age"] . "<br>";
    echo "Email: " . $user["Email"] . "<br>";
    echo "City: " . $user["City"] . "<br>";
    echo "<br>";
}
?>
