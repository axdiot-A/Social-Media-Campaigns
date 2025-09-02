<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/style1.css?<?php echo time(); ?>">
    
</head>
<body>
      <header>
       
        <h1 style="font-size:50px;">SMC</h1>
          
             <input type="checkbox" id="check">
                    <label for="check">
                         <div class="dropdown">
                                    <button class="dropbtn">☰</button>
                                    <div class="dropdown-content">
                                        <a href="Home.php">Home</a>
                                        <a href="Information.php">Information</a>
                                        <a href="Social_Media_Apps.php">Social_Media_Apps</a>
                                        <a href="Parental_Support.php">Parental_Support</a>
                                        <a href="LiveStreaming.php">LiveStreaming</a>
                                        <a href="Legislation_Guidance.php">Legislation_Guidance</a>
                                        <a href="ContactUs.php">ContactUs</a>
                                        <a href="login_form.php">login_form</a>
                                    </div>
                                </div> 
                    </label>
       
                   <ul>

                     
               
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="Information.php">Information</a></li>
                    <li><a href="Social_Media_Apps.php">Social Media Apps</a></li>
                    <li><a href="Parental_Support.php">Parental Support</a></li>
                    <li><a href="LiveStreaming.php">LiveStreaming</a></li>
                    <li><a href="Legislation_Guidance.php">Legislation Guidance</a></li>
                    <li><a href="ContactUs.php">Contact Us</a></li> 
                    <li><a href="login_form.php">LogIn</a></li> 
                    <li><div class= "google_translate" id="google_translate_element"></div></li>
                     </ul>
 
                        <script type="text/javascript">
                            function googleTranslateElementInit() 
                             {
                                    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                             }
                        </script>
 
                        <script type="text/javascript" 
                                    src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                        </script>
                     
               
                

            </header>
	<h2>Stay Safe Form</h2>
	<form action="StaySafeProcess.php" method="post" enctype="multipart/form-data">
		
		<input type="text" name="Header" placeholder="Enter Header">
		<br><br>
		<input type="text" name="Name" placeholder="Enter Name">
		<br><br>
		<input type="text" name="Facts" placeholder="Enter Facts">
		<br><br>
		
        <label>Social Media Stay Safe Photo :</label>
		<input type="file" name="picture">
        <br><br>
        
        
		<input type="submit" name="submit" value="Register">
		<input type="reset" name="clear" value="Clear">
	</form>
	 </div>

   
       <footer>
        <div id="fleft">
            <a href="hhtps://www.facebook.com/"><img src="../images/facebook.png" width="30" height="30" alt=""></a>
            <a href="hhtps://www.instgram.com/"><img src="../images/instagram.png" width="30" height="30" alt=""></a>
            <a href="hhtps://www.youtube.com/"><img src="../images/youtube.png" width="30" height="30" alt=""></a>
            <a href="hhtps://www.twitter.com/"><img src="../images/twitter.png" width="30" height="30" alt=""></a>
            <a href="hhtps://www.pinterest.com/"><img src="../images/pinterest.png" width="30" height="30" alt=""></a>
        </div>
        <div id="fright">
            | <a href="Home.php">Home</a> |
            |<a href="Information.php">Information</a>|
            |<a href="Social_Media_Apps.php">Social Media Apps</a>|
            |<a href="Parental_Support.php">Parental Support</a>|
            |<a href="LiveStreaming.php">LiveStreaming</a>|
            |<a href="Legislation_Guidance.php">Legislation Guidance</a>|
            |<a href="ContactUs.php">Contact Us</a>|
        </div> 
        <div class="fbottom">
            <p>You are at Stay_Safe Page.</p>
            CopyRight &copy; www.Social Media Campaigns.com All Right Reserved.
        </div>
    </footer>
       
        </div>

</body>
</html>