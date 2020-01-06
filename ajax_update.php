<?php

$mysqli = new mysqli('localhost', 'root', '', 'project2');

// mysqli_set_charset($mysqli, "utf8");

$sql = "UPDATE category SET " . $_POST['col'] . " = '" . $_POST['value'] . "' WHERE id = '" . $_POST['id']. "'";

$return = $mysqli->query($sql);

echo $return;
