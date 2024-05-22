<?php

include('verifica_adm.php');
   session_destroy();
   header("location: ../index.php");
   exit(); 
   
?>