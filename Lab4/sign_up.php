<?php

if (isset($_POST['submitted'])){
    include ('includes/connection.php');
    $user_fname=$_POST['user_fname'];
    $user_lname=$_POST['user_lname'];
    $user_id=$_POST['user_id'];
    $user_pass=$_POST['user_pass'];
    $selector="select user_id from users where user_id='$id'";
    if(mysqli_num_rows($request)==1){
        echo"Asa ID deja exista!";
        die('asa login deja exista');      
        
    }
        $sqlinsert="INSERT INTO users (user_fname,user_lname,user_id,user_pass) VALUES('$user_fname','$user_lname','$user_id','$user_pass')";
    
    if(!mysqli_query($conn,$sqlinsert)){
       die('error inserting new record');
    }
    header('Location: index.php');

  }




?>