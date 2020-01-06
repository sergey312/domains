<?php

$mysqli = new mysqli('localhost', 'root', '', 'project2');

// mysqli_set_charset($mysqli, "utf8");

$results = $mysqli->prepare("INSERT INTO category (category_name) VALUES (?)");

$results->bind_param('s', $_POST['category_name']);

$return = $results->execute();

echo $return;
