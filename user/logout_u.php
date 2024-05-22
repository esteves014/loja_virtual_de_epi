<?php

include('verifica_u.php');
   session_destroy();
   header("location: ../index.php");
   exit(); 
   
?>