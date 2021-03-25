 <?php

session_start(); // needs to be before anything else on page to use $_SESSION
    $date = "";
    if(isset($_POST['date'])){
        $_SESSION['date'] = $_POST['date'];
    }



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

if (isset($_POST['Name'])) {
 $one= $_POST['Name'];}
if (isset($_POST['Designation'])) {
 $two= $_POST['Designation']; 
}
if (isset($_POST['date'])) {

$three= $_POST['date'];}




$sql="INSERT INTO `respondent`(`respondent name`, `designation`, `date`) VALUES ('$one','$two','$three') ";
if ($conn->query($sql) === TRUE) {
  header('Location: pagetwo.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 