<?php

session_start();

if(isset($_SESSION['Sr.No']))
{
    unset($_SESSION['Sr.No']);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('You have logged out Now');
    window.location.href='Login_page.php';
    </script>");
   die;

}

?>