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
                    <li><a href="index.php">Home</a></li>
                    <li><a class="selected" href="Features.php">Register</a></li>
                   
                </ul>
            </nav>
        </header>
<!--intro-->
        <div class="pt-96px pb-64px ta-center background-blue"> 
            <div class="wrapper-inner-s">
                <div class="main-header">
                    <h1>Register Now</h1>
                </div>
            </div> 
        </div>

      <div id="middle" class= "background-main-lg pt-96px pb-64px">
        <div class = "wrapper-inner-s ">

            <form action="query.php" method="POST">

                <h5 for="Email-field" class="main-header">Email</h5>          
                <input type="text" name="email" id="Email-field" class="inputboxes">

                <br>

                <h5 for="Password-field" class="main-header">Password</h5>          
                <input type="text" name="pword" id="Password-field" class="inputboxes"> 
                <br><br> 
                
                
                <p>I have Interest in:</p>

                <label for="knitting" class="">Knitting</label>
                <input  type="checkbox"  id="knitting" name="knitting" value="knitting"> 
                <br>

                <label  for="Diplomacy Board Game" class="">Diplomacy Board Game</label>
                <input  type="checkbox"  id="Diplomacy Board Game" name="Diplomacy Board Game" value="Diplomacy Board Game"> 
                <br>

                <label  for="Chess" class="Checkbox">Chess</label>
                <input  type="checkbox"  id="Chess" name="Chess" value="Chess"> 
                <br>

                <label  for="Chat" class="Chat">A Chat</label>
                <input  type="checkbox"  id="Chat" name="Chat" value="Chat"> 
                <br><br>

                <input id="Register" class="btn" type="submit">

            </form>
        </div>

      </div>
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
