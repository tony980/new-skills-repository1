 <?php



     session_start(); // needs to be before anything else on page to use $_SESSION
    $you = "";
    if(isset($_POST['you'])){
        $_SESSION['you'] = $_POST['you'];
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



if (isset($_POST['date'])) {
 $eleven= $_POST['date'];
}



if (isset($_POST['you'])) {
 $one= $_POST['you'];


}
if (isset($_POST['be'])) {
 $two= $_POST['be']; 
}
if (isset($_POST['address'])) {

$three= $_POST['address'];}

if (isset($_POST['Telephone'])) {

$four = $_POST['Telephone'];}

if (isset($_POST['County'])) {
$five = $_POST['County'];}
if (isset($_POST['Sub'])) {
$six = $_POST['Sub'];}

if (isset($_POST['Town'])) {
$seven = $_POST['Town'];}

if (isset($_POST['Road'])) {
$eight = $_POST['Road'];}

if (isset($_POST['Building'])) {
$nine = $_POST['Building'];}

if (isset($_POST['type'])) {
$ten = $_POST['type'];

}


$sql="INSERT INTO `institutions`(`date`,`name`, `type`, `postal address`, `telephone`, `county`, `sub-county`, `town`, `road`, `building`, `type of ownership`)  VALUES ('$eleven','$one','$two','$three','$four','$five','$six','$seven','$eight' ,'$nine','$ten') ";
if ($conn->query($sql) === TRUE) {
  header('Location: pagethree.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 