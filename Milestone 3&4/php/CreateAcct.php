<?php
$db =  new mysqli("localhost","cen4010sum18_g02","group2");
          $db->select_db ("cen4010sum18_g02");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Users (firstname, lastname, email, password)
VALUES ($fname, $lname, $email, $psw)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>