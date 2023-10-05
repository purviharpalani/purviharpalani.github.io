<?php 
     $H="localhost";
     $U="root";
     $P="";
     $d="jamiston";
    
     $C= new mysqli ($H,$U,$P,$d);
if(!$C)
     {
     	echo"no";
     }
else
     {
     	echo"yes";
     }
 
?>