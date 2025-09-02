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
           

            <h2>Contact Us..</h2>
            <form action='contact_process.php' method='post'>
                <div>
                    <input type="text" name="fname" placeholder="First Name..." required>
                </div>
                <div>
                    <input type="text" name="lname" placeholder="Last Name..." required>
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email..." required>
                </div>
                <div>
                    <input type="number" name="phone" placeholder="Phone No..."required>
                </div>
                <div>
                    <textarea name='message' cols="30" rows="10">Write a message here....</textarea>
                </div>
                <div>
                    <input type="submit" name='submit' value='Send'>
                    <input type='reset' value='clear'>
                </div>
                <div>
                    <a href="Policy.php">Privacy Policy</a>
                </div>
            </form>
              <div>
            <h4 style="font-size: larger;">Find Us Here</h4>
            <div class="Map">
                <iframe width="560" height="315" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.983501550865!2d96.15575767195376!3d16.777496420094607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec86c64627b3%3A0xf629281949864a5c!2sSule%20Square!5e0!3m2!1sen!2smm!4v1695973228029!5m2!1sen!2smm" width="360" height="270" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
            </div>
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
            <p>You are at Contact Us Page.</p>
            CopyRight &copy; www.Social Media Campaigns.com All Right Reserved.
        </div>
    </footer>
       
        </div>
    </body>
</html>