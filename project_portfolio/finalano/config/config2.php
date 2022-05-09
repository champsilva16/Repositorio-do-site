<?php
   $bd_host="localhost";
   $bd_user="root";
   $bd_password="";
   $bd_database="finalano";
 
   $liga=new mysqli($bd_host,$bd_user,$bd_password,$bd_database);
 
   if($liga->connect_error){
     die ("Erro na ligaçao (" . $liga->connect_error . ") - " . $liga ->connect_error);
 
   }?>