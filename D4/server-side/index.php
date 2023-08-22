<?php


$page = $_GET['page'] ?? 1;

$data = json_decode(file_get_contents('data.json'));

$lastElement = $page * 10;

$output = [];

for($i = 1; $i <= 10; $i++) {
    $output[] = $data[$lastElement-$i];
}

echo json_encode($output);