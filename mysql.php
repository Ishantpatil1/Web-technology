 <?php
// Connect to the database
$link = mysqli_connect("localhost", "root", "", "test");

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo "Connection Established...<br>";
}

// Define the query
$sql = "SELECT * FROM student";

// Execute the query
if ($result = mysqli_query($link, $sql)) {
    // Check if there are results
    if (mysqli_num_rows($result) > 0) {
        // Fetch and display each row of the result
        while ($row = mysqli_fetch_array($result)) {
            echo $row['Roll'] . " " . $row['Name'] . " " . $row['Class'] . " " . $row['Marks'] . "<br>";
        }
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records found.";
    }
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
