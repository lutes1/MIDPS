<?php

if (isset($_POST['submitted'])){
    include ('includes/connection.php');
    
    $id=$_POST['user_id'];
    $pass=$_POST['user_pass'];
    $selector="select * from users where user_id='$id' && user_pass='$pass'";
    $request = mysqli_query($conn,$selector) or die('error');
    if(mysqli_num_rows($request)==1)
        {
            echo"logged in";
            header('Location: index.php?submit1=aaa');
        }
    
    else {
            echo'Ati grsit ceva!Incercati din nou!';
            echo"<a href='index.php?signin=Sign+In'><button>Inca Odata</button></a>";
            
            }
  }
 ?>