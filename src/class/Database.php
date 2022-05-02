<?php
$link = new mysqli("localhost","root","Bk3dGftO)QiQIPj5","playtime");

function getLastId($link): int
{
	$q = 'SELECT LAST_INSERT_ID()';
	return $link->query($q)->fetch_row()[0];
}

?>
