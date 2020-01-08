<?php

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
    //do if to togall between login and logout
    Redirect("Location: "); 
?>

