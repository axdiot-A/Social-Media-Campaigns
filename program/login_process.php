<?php session_start(); ?>
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
	<?php

		///// reCAPTCHA  key process /////

 

		if(isset($_POST['g-recaptcha-response']))
         $captcha=$_POST['g-recaptcha-response'];

 

    if(!$captcha){
        				echo "<script>alert('Please check the reCaptcha form!');</script>";
        				echo "<script>window.location='login_form.php';</script>";
    }

 

    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdaoKcpAAAAAKw8EPbmp1YI0hM8XQ2TWHJ6kuKV&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);

 

    
    				if($response['success'] == false)
    				{
        				echo "<script>alert('You are a spammer!');</script>";
        				echo "<script>window.location='login_form.php';</script>";
    				}
    				else
    				{
       				echo "<script>alert('Welcome!');</script>";
   					}

		include("dbconnection.php");

		/////////// login failure counter ///////////

		if(isset($_SESSION['counter']))
		{
				$counter = $_SESSION['counter'];

				if($counter==3)
				{
					echo "<script>window.location.href='login_timer.php';</script>";
					setcookie('login_fail','fail',time()+60); // 60*10 = 10 minutes
				}
		}
		else{
				$counter = 1; //first time
		}
		///////////////////////////////////////////
			

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "select * from user where username='$username'";

		$result = mysqli_query($connection,$sql);

		$num_rows = mysqli_num_rows($result);

		if($num_rows == 0){
			echo "Please register and try again!<br>";
			echo "<a href='register_form.php'>Register</a>";
		}
		else{
		//num_rows not equal to 0 // user existed
				$record = mysqli_fetch_assoc($result); //only one/first record

				$hash_pw = $record['password'];//hashed password in the table				

				if(password_verify($password,$hash_pw))
				{
					echo "Welcome $username <br>";

					$role = $record['role'];

					if($role=='admin')
					{
						$_SESSION['admin']='admin';
						echo "<a href='userlist.php'>User List</a>";
						echo "<a href='contact_list.php'>Contact List</a>";
						echo "<a href='Stay_Safe_Form.php'>Stay_Safe_Form</a>";
						echo "<a href='Safelist.php'>Safelist</a>";
					}

					

				}
				else{
						echo "<script> 
									alert('Incorrect password!'); 
									window.location.href='login_form.php';
							 </script>";

						//echo $counter; //1 2 3
					
						$counter++; //1 2 3

						$_SESSION['counter']=$counter;

                    

						
				}

		}
		

	?>
	   	<script src="https://www.google.com/recaptcha/enterprise.js?render=6LdaoKcpAAAAAN4qR_luGiVzehzG1sMSH2_zHUlG"></script>	



</body>
</html>