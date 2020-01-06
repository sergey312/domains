<?php

$mysqli = new mysqli('localhost', 'root', '', 'project2');

$sql = "DELETE FROM publication WHERE publication_id = '" . $_POST['id'] . "'";

$return = $mysqli->query($sql);

echo $return;

