<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Social Media Campagins</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/style1.css" type="text/css">
    </head>
    <body>
        <?php
        include("dbconnection.php");


     
 
       
    

    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']); 
    $message = $_POST['message'];
    if(empty($lname) || empty($email)){
        echo "<script>
                    alert('Last name and email is required!');
                    window.location.href='Parental_Support.php';
            </script>";
    }

    else{

                $sql="insert into Opnion(fname,lname,email,message) 
                    values('$fname','$lname','$email','$message')";

                if(mysqli_query($connection,$sql)){
                   
                    echo "<script>
                                alert('Your Opnion is saved!');
                                window.location.href='Parental_Support.php';
                        </script>";
                }
                else echo "Insertion Error<br>";
            }
        ?>
    </body>