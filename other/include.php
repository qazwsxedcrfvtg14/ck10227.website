<?php
if (!ini_get('register_globals'))
{
   extract($_POST);
   extract($_GET);
   extract($_SERVER);
   extract($_FILES);
   extract($_ENV);
   extract($_COOKIE);
   if ( isset($_SESSION) )
   {
       extract($_SESSION);
   }
}
?>
