<?php
// Connection à la base de données
$link = new mysqli("localhost","root","Bk3dGftO)QiQIPj5","playtime");

function getLastId($link): int
{
	$q = 'SELECT LAST_INSERT_ID()';
	return $link->query($q)->fetch_row()[0];
}

// Authorisation
?>
