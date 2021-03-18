<?php


$conn = mysqli_connect('127.0.0.1','root','','articles');

if(!$conn){
    
   echo 'ERREUR DE CONNEXION! :'. mysqli_connect_error(), mysqli_connect_errno(); 
}

?>