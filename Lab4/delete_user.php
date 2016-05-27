<?php
if (isset($_POST['submitted'])){
    include ('includes/connection.php');
    $user_id=$_POST['user_id'];
    $user_pass=$_POST['user_pass'];
    
    $sql = "DELETE FROM users WHERE user_id='$user_id'";

if (!mysqli_query($conn, $sql)) {
    
    echo "Error deleting record: " . mysqli_error($conn);
}

}

?>