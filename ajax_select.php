<?php

$mysqli = new mysqli('localhost', 'root', '', 'project2');

$sql = "SELECT * FROM category";

$results = $mysqli->query($sql);

$categoryList = array();
$i = 0;

while ($row = $results->fetch_assoc()) {
    $categoryList[$i]['id'] = $row['id'];
    $categoryList[$i]['category_name'] = $row['category_name'];
    $i++;
}

echo json_encode($categoryList);
