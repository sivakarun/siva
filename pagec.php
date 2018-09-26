<?php

session_start(); 
 $_SESSION['name']=$_POST['username'];

if(isset($_SESSION['page_count']))
{
     $_SESSION['page_count'] += 1;
}
else
{
     $_SESSION['page_count'] = 1;
}
 echo 'You are visitor number ' . $_SESSION['page_count']. $_SESSION['name'];
   include 'main.html';

?>