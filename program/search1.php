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
             
           

	<form action='search1.php' method='post'>
		<input type="text" name="keyword" placeholder="Enter any keyword">

		<input type="submit" name="search" value="Search">
	</form>

	<?php
		include("dbconnection.php");

		if(isset($_POST['search'])){

			$keyword = $_POST['keyword'];
			
			$sql = "SELECT * FROM Social WHERE role='admin' AND
            (Header LIKE '%$keyword%' OR Name LIKE '%$keyword%' OR 
            Facts LIKE '%$keyword%')";


            $result = mysqli_query($connection,$sql);

			$num_rows = mysqli_num_rows($result);

		if($num_rows == 0){
			echo "<hr>";
			echo "Not found!<br>";			
		}
		else{
				//num_rows not equal to 0 // user existed

				echo "<h2>Searched List Of Latest Techniques To Stay Safe On Popular Social Apps</h2>";

				for($i=0;$i<$num_rows;$i++){

					$record = mysqli_fetch_assoc($result); 

					$id=$record['id'];

					echo "<img src='".$record['remark']."' width=100 height=100><br>";

					echo $record['Header']."<br>";
					echo $record['Name']."<br>";
					echo $record['Facts']."<br>";

					
					      
				}				
		}
	}//isset

	?>	
	

</body>
</html>