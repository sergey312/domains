<?php
$mysqli = new mysqli('localhost', 'root', '', 'project2');

$sql = "DELETE FROM category WHERE id = '" . $_POST['id'] . "'";

$return = $mysqli->query($sql);

echo $return;

