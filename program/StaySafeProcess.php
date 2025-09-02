<?php
include("dbconnection.php");

// File upload handling
$Social_name = $_FILES['picture']['name'];
$Social_tmp_name = $_FILES['picture']['tmp_name'];
$path = "../images/Social/".$Social_name;
copy($Social_tmp_name, $path);

// Sanitize and retrieve form data
$Header = mysqli_real_escape_string($connection, trim($_POST['Header']));
$Name = mysqli_real_escape_string($connection, trim($_POST['Name']));
$Facts = mysqli_real_escape_string($connection, trim($_POST['Facts']));

// Insert data into the database
$sql = "INSERT INTO Social (Header, Name, Facts, role, remark) 
        VALUES ('$Header', '$Name', '$Facts', 'admin', '$path')";
    
if (mysqli_query($connection, $sql)) {
    echo "<script>
            alert('One Social record is registered!');
            window.location.href='Stay_Safe_Form.php';
          </script>";
} else {
    echo "Error: " . mysqli_error($connection);
}

?>
