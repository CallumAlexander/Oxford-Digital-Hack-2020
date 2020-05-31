<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "lamp";
$password = "password";
$dbname = "friendr";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST["email"];
$pswd = $_POST["pword"];
$knitting = isset($_POST["knitting"]);
$diplomacy =isset($_POST["DiplomacyBoardGame"]);
$chess = isset($_POST["Chess"]);
$chat = isset($_POST["Chat"]);


$sql = "SELECT email,password FROM users WHERE email = '$email' AND password = '$pswd';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["email"] . $row["password"];
  }
} else {
  $sql = "INSERT INTO users VALUES ('$email','$password','$knitting','$diplomacy','$chess','$chat');";
  $result = $conn->query($sql);
}

// Searches for knitting
$sql = "SELECT email  FROM users WHERE knitting = '$knitting';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "Users who are interested in knitting:";
	while($row = $result->fetch_assoc()){
		echo "Email to contact : " . $row["email"];
	}
	echo "<br>";
} else {
	echo "Sozzles, no matches for yourselfsh with knitting";
}

$sql = "SELECT email FROM users WHERE diplomacy = '$diplomacy';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "Users who are interested in knitting:<br>";

}

//$conn->close();
?>
