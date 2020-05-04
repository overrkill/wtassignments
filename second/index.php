<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>second wt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="head"> FACEPOST <i>created by Abhishek Kale</i></div>
<?php
$servername = "localhost";
$username = "web";
$password = "password";
$dbname = "web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='post'> <div class='post-title'> " . $row["TITLE"]. " </div><div class='post-body'>" . $row["BODY"]. "</div></div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</body>
</html>