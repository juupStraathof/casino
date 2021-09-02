<?php

    $server="localhost";
    $user="root";
    $wachtwoord="root";
    $database="casinodb";
    
    
    //verbinding maken met mysql database service
    
    $con = new mysqli ($server,$user,$wachtwoord,$database);

    if ($con-> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
    }
    
  ?>