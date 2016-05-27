<?php

include('sign_in.php');
include('main.php');
include('buttons.php');
if($_GET){
         if(isset($_GET['signin'])){
        include('sign_in_form.php');
        if(isset($_GET['signin1'])){
        include('auto_refresh.php');}        
    }elseif(isset($_GET['signup'])){
         include('sign_up_form.php');
    }elseif(isset($_GET['submit1'])){
         include('auto_refresh.php');
    }elseif(isset($_GET['delete'])){
         include('delete_user_page.php');}
         if(isset($_GET['signin1'])){
        echo'Record Deleted Succesfully';}
}
include('footer.php');

?>