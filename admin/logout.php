<?php session_start(); ?>
   
<?php            
   session_unset();
   header("Location: login.php");
?>
