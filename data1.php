 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


 $eight= $_POST['date'];
 $seven= $_POST['Institution'];
 $one= $_POST['S/NO'];
 $two= $_POST['class_type']; 
$three= $_POST['CODE'];
$four = $_POST['MALE'];
$five = $_POST['FEMALE'];
$six = $_POST['YEAR'];





$sql="INSERT INTO `students admitted`(`date`,`institution`,`serial number`, `programme`, `programme code`, `male`, `female`, `year`) VALUES ('$eight','$seven','$one','$two','$three','$four','$five','$six') ";
if ($conn->query($sql) === TRUE) {
  header('Location: pagethree.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 