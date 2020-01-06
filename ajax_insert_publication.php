<?php

$mysqli = new mysqli('localhost', 'root', '', 'project2');

// mysqli_set_charset($mysqli, "utf8");


$results = $mysqli->prepare("INSERT INTO publication (publication_title, publication_description, publication_body, publication_date) VALUES (?, ?, ?,?)");

$results->bind_param('ssss', $_POST['publication_title'], $_POST['publication_description'], $_POST['publication_body'], $_POST['publication_date']);

$return = $results->execute();

echo $return;
