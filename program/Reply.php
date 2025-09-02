<?php
session_start();

if (isset($_SESSION['admin']) && isset($_POST['id']) && isset($_POST['reply'])) {
    include("dbconnection.php");

    $id = $_POST['id'];
    $reply = $_POST['reply'];

    // Update the database with the reply
    $sql = "UPDATE contactus SET reply = '$reply' WHERE id = $id";
    if(mysqli_query($connection, $sql)) {
        echo "<script>
                    alert('One Replied is recorded!');
                    window.location.href='contact_list.php';
             </script>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
} else {
    echo "Unauthorized access.";
}
?>
