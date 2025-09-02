
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


        $profile_name = $_FILES['picture']['name'];
        $profile_tmp_name  = $_FILES['picture']['tmp_name'];

        $path = "../images/profile/".$profile_name;

        copy($profile_tmp_name, $path);

       /* $profile_name = $_FILES['picture']['name'];        //  staff.jpg
        $Folder = "images/profile/";                                    //  StaffPhoto/
 
        $FileName = $Folder . '_' . $profile_name;                    // StaffPhoto/_staff.jpg
 
        $copied = copy($_FILES['picture']['tmp_name'], $FileName);*/
 
       
    

    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']); 

    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }
    else echo "<script>
                                alert('You must choose Gender!');
                                window.location.href='register_form.php';
                        </script>";

    $country = $_POST['country'];
    $uname = trim($_POST['uname']); //white space
    $pw = trim($_POST['password']);
    $cpw = trim($_POST['confirm_password']);

    if($country==0){
        echo "<script>
                                alert('You must choose country!');
                                window.location.href='register_form.php';
                        </script>";
    }   
    else if(empty($uname)) //$uname==""
        echo "<script>
                                alert('You must enter confirm username!');
                                window.location.href='register_form.php';
                        </script>";    
    else if(empty($pw))
        echo "<script>
                                alert('You must enter passowrd!');
                                window.location.href='register_form.php';
                        </script>";   
    else if(empty($cpw))
        echo "<script>
                                alert('You must enter confirm passowrd!');
                                window.location.href='register_form.php';
                        </script>";
    else{

        if($pw==$cpw)
        {
            $hash_pw = password_hash($pw, PASSWORD_DEFAULT);

            $hash_pw = mysqli_real_escape_string($connection,$hash_pw);


            $sql_select = "select * from user where username='$uname'";

            $result = mysqli_query($connection,$sql_select);

            $num_rows = mysqli_num_rows($result);

            if($num_rows==0){

                $sql="insert into user(fname,lname,email,phone,gender,country,
                            username,password,role,remark) 
                    values('$fname','$lname','$email','$phone','$gender','$country',
                            '$uname','$hash_pw', 'user','$path')";

                if(mysqli_query($connection,$sql)){
                    //echo "One User record is registered.<br>";
                    echo "<script>
                                alert('One User record is registered!');
                                window.location.href='login_form.php';
                        </script>";
                }
                else echo "Insertion Error<br>";
            }   
            else {
                    //echo "Username is existed! Try again to enter new username!";
                    echo "<script>
                            alert('Username is existed! Try again to enter new username!');
                            window.location.href='register_form.php';
                        </script>";
                }

        }
        else echo "Password not matched! Please type your password again!<br>";
    
    }

    ?>
        <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdaoKcpAAAAAN4qR_luGiVzehzG1sMSH2_zHUlG"></script>  


