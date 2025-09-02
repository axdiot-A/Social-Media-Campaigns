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
	    if(isset($_SESSION['admin'])){

	    
	    echo "<a href='logout.php'>Logout</a><hr>";	

		include("dbconnection.php");

		$sql = "select * from Social where role='admin'"; //all users only

		$result = mysqli_query($connection,$sql);

		$num_rows = mysqli_num_rows($result);

		if($num_rows == 0){
            echo "No Registered User!<br>";
            echo "<a href='register_form.php'>Register</a>";
        }
		else{
				//num_rows not equal to 0 // user existed

				for($i=0;$i<$num_rows;$i++){

					$record = mysqli_fetch_assoc($result); 

					$id=$record['id'];

					echo "<img src='".$record['remark']."' width=100 height=100><br>";

                    echo $record['Header']."<br>";
                    echo $record['Name']."<br>";
                    echo $record['Facts']."<br>";

					echo "<a href='#' onclick='showConfirm(".$id.")'>Delete</a> 
							|| 
						  <a href='Safe_Update_Form.php?id=$id'>Update</a>
					      <hr>";

				}//end for
				
		}//end of else

	}//session if
	else echo "Restricted page! Administrator only!<br>";

	?>

<script type="text/javascript">

	function showConfirm(id){
		if(confirm("Are you sure you want to delete?"))
		{
			window.location.href="deleteSafe.php?id="+id;
		}
		
	}	

</script>
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
            <p>You are at Safe List Page.</p>
            CopyRight &copy; www.Social Media Campaigns.com All Right Reserved.
        </div>
    </footer>


</body>
</html>