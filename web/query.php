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
		echo "Email to contact : " . $row["email"] . "<br>";
	}
	echo "<br>";
} else {
	echo "Sozzles, no matches for yourselfsh with knitting";
}

// Searches for diplomacy
$sql = "SELECT email FROM users WHERE diplomacy = '$diplomacy';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "Users who are interested in diplomacy : <br>";
	while($row = $result->fetch_assoc()){
		echo "Email to contact : " . $row["email"] . "<br>";
	}
	echo "<br>";
} else {
	echo "Sozzles, no matches for yourself with diplomacy";
}

// searches for chess
$sql = "SELECT email FROM users WHERE chess = '$chess';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "Users who are interested in chess : <br>";
	while ($row = $result->fetch_assoc()) {
		echo "Email to contact : " . $row["email"] . "<br>";
	}
	echo "<br>";
} else {
	echo "Sorry, no chess pals for you";
}

// searches for great chat
$sql = "SELECT email FROM users WHERE chat = '$chat';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "Usrs who are interested in a chat : <br>";
	while ($row = $result->fetch_assoc()) {
		echo "Email to contact : " . $row["email"] . "<br>";
	}
	echo "<br>";
} else {
	echo "Sorry no chats available";
}

$conn->close();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,500,700|IBM+Plex+Serif:400,600" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <title>Friendr</title>
  </head>
  <body>
    <header>
      <div class="grad bgop-grad"></div>
      <nav>
        <ul class="ta-center">
          <li><a class="selected" href="index.php">Home</a></li>
          <li><a href="Features.php">Register</a></li>
          
        </ul>
      </nav>
    </header>
    <main>


      <div class="pt-96px pb-64px ta-center background-main-lg top-congrats">
        <div class="wrapper-inner-s">
          <!--<img src = "./img/logo.png" alt ="logo"> -->
          <div class = "main-header congratulations">
            <h1>Here are your Matches:</h1>
          </div>
          <div class="congrats_div">
            <img class="congrats_pic" src="img/congrats.jpg">
          </div>

        </div>
      </div>
<!--section two-->
      <div class="background-main-dg pt-96px pb-64px ta-center outer_congrats">         
        <div class="match_info">

        // -----------------------------------------------------
        <?php 
        
            // Searches for knitting
            $sql = "SELECT email  FROM users WHERE knitting = '$knitting';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "Users who are interested in knitting:";
                while($row = $result->fetch_assoc()){
                    echo "Email to contact : " . $row["email"] . "<br>";
                }
                echo "<br>";
            } else {
                echo "Sozzles, no matches for yourselfsh with knitting";
            }

            // Searches for diplomacy
            $sql = "SELECT email FROM users WHERE diplomacy = '$diplomacy';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "Users who are interested in diplomacy : <br>";
                while($row = $result->fetch_assoc()){
                    echo "Email to contact : " . $row["email"] . "<br>";
                }
                echo "<br>";
            } else {
                echo "Sozzles, no matches for yourself with diplomacy";
            }

            // searches for chess
            $sql = "SELECT email FROM users WHERE chess = '$chess';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "Users who are interested in chess : <br>";
                while ($row = $result->fetch_assoc()) {
                    echo "Email to contact : " . $row["email"] . "<br>";
                }
                echo "<br>";
            } else {
                echo "Sorry, no chess pals for you";
            }

            // searches for great chat
            $sql = "SELECT email FROM users WHERE chat = '$chat';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "Usrs who are interested in a chat : <br>";
                while ($row = $result->fetch_assoc()) {
                    echo "Email to contact : " . $row["email"] . "<br>";
                }
                echo "<br>";
            } else {
                echo "Sorry no chats available";
            }

            $conn->close();
        ?>
        // ----------------------------------------------------------------------
        
          <div class = "next_step">
            <p>
              Now all you have to do to make your time in isolation a bit more exciting is contact your new friend at: <br>[insert email]
            </p>
          </div>
          
        </div>
      </div>      
    </main>
  <footer class="ta-center">
        <!--
        <a href="https://twitter.com/sasbusinessbox" target="_blank"> <img src="./img/twitter-logo.png" alt="twitter"> </a>
        <a href="http://www.facebook.com/sasbusinessbox" target="_blank"> <img src="./img/fb-logo.png" alt="facebook"> </a>
        <a href="https://www.instagram.com/sasbusinessbox/" target="_blank">  <img src="./img/insta-logo.png" alt="Instagram"></a>
        <a href="http://www.youtube.com/channel/UCygFDzkiOMdL1xAatAVWOzQ" target="_blank"> <img src="./img/yt-logo.png" alt="Youtube"></a>
        <br> -->
      <small>Copyright &copy; BlueSpark solutions 2020</small>  
    </footer>
  </body>
</html>
