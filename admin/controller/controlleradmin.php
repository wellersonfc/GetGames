<?php
    if($_POST['email']=="admin@admin.com" && $_POST['senha']=="admin"){

     header('Location:../home.php');

   }else{
      header('Location:../index.php');
   }
?>