<?php

$mysqli = new mysqli('localhost', 'root', '', 'project2');

$sql = "SELECT * FROM publication";

$results = $mysqli->query($sql);

$publicationList = array();
$i = 0;

while ($row = $results->fetch_assoc()) {
    $publicationList[$i]['publication_id'] = $row['publication_id'];
    $publicationList[$i]['publication_title'] = $row['publication_title'];
    $publicationList[$i]['publication_description'] = $row['publication_description'];
    $publicationList[$i]['publication_body'] = $row['publication_body'];
	$publicationList[$i]['date'] = $row['date'];
    $i++;
}

echo json_encode($publicationList);
