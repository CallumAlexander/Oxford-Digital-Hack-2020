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
                    <li><a class="selected" href="Register.php">Register</a></li>
                   
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
        <div class = "wrapper-inner-s form_div">

            <form action="query.php" method="POST">
                <div class="input_div">
                    <div class="form_text_boxes">

                        <h5 for="Email-field" class="main-header text_box_title">Email</h5>          
                        <input type="text" name="email" id="Email-field" class="inputboxes">

                        <br>

                        <h5 for="Password-field" class="main-header text_box_title">Password</h5>          
                        <input type="password" name="pword" id="Password-field" class="inputboxes"> 
                        <br><br> 

                    </div>
                    
                    
                    <div class="form_check_boxes">
                        <h5 id="interest" class="main-header">I'm interested in:</h5>

                        
                        <input  type="checkbox"  class="check_box" id="knitting" name="knitting" value="knitting"> 
                        <label for="knitting" class="check_box_label">Knitting</label>
                        <br>

                        
                        <input  type="checkbox"  class="check_box" id="Diplomacy Board Game" name="Diplomacy Board Game" value="Diplomacy Board Game"> 
                        <label  for="Diplomacy Board Game" class="check_box_label">Diplomacy Board Game</label>
                        <br>

                        
                        <input  type="checkbox"  class="check_box" id="Chess" name="Chess" value="Chess"> 
                        <label  for="Chess" class="check_box_label">Chess</label>
                        <br>

                        
                        <input  type="checkbox"  id="Chat" name="Chat" value="Chat"> 
                        <label  for="Chat" class="check_box_label">A Chat</label>
                        <br><br>

                    </div>  
                </div>

                <div class="submit_div">

                <input id="Register" class="btn submit_button" type="submit">

                </div>
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
