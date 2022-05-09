<?php

# Informa qual o conjunto de caracteres será usado.
header('Content-Type: text/html; charset=utf-8');


   $bd_host="sql110.epizy.com";
   $bd_user="epiz_31428328";
   $bd_password="LdoTrdvs8b";
   $bd_database="epiz_31428328_final_ano";
 
   $liga=new mysqli($bd_host,$bd_user,$bd_password,$bd_database);
 
   if($liga->connect_error){
     die ("Erro na ligaçao (" . $liga->connect_error . ") - " . $liga ->connect_error);
 
   }
   
$liga->set_charset("utf8")
  /*mysql_query('SET character_set_connection=utf8');
  mysql_query('SET character_set_client=utf8');
  mysql_query('SET character_set_results=utf8');*/
   
   ?>