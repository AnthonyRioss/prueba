<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=healthy2;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}