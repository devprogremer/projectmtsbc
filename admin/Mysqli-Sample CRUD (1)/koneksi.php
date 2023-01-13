<?php

/*
* To change this template, choose Tools | Templates
* and open the template in the editor.
*/
    $host   ="localhost";
    $user ="root";
    $password ="";
    $db ="scrud"; 
    
    $config =  mysqli_connect($host, $user, $password,$db);
    if(mysqli_connect_errno())
    {
    echo'Gagal bang:'.mysqli_connect_error();
    }
    else {
    }
    error_reporting(0);
    
?>
