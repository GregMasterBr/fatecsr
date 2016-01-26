<?php 
session_start();
if(!$_SESSION["usuario"]){
     echo $_SESSION["usuario"];
    echo "<br />";
     echo $_SESSION["path"];
    
    
     // header('Location:'.$_SESSION["path"]."login.php");
      //exit;
    } 
?>