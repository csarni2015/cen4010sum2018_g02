<?php
include "connectDB.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$psw = $_POST["psw"];

$sql = "INSERT INTO Users ( fname, lname, email, psw) VALUES ('john','clardy','jclardy2014@fau.edu','fdfdfd')";

echo 'Added succesfully';

?>

<html>
<body>
    
    Thank you <?php echo $fname ?> <br>
    
    
    
</body>





</html>