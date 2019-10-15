<?php


//import required documents
require(constants.php);
require(functions.php);

//TODO enable session
session_start();

//TODO require authentication on pages which allow changes
if (preg_match("{^(edit|add|delete)}", $_SERVER["PHP_SELF"]))
{
    if (empty($_SESSION["id"]))
    {
        redirect("/login.php");
    }
}

/*error logging*/

//set true to display errors. Set false to not display errors.
ini_set("display_errors", true);

// if you only want some errors, you can adjust that here
error_reporting(E_ALL);
?>
