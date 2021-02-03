<?php
include __DIR__ . '/disks.php';
/*
Controllo per evitare la notifica nel php_error
    Notice:  Undefined index: genre
*/
if(isset($_GET['genre'])){
    $genre = $_GET['genre'];
} else {
    $genre = 'All';
}

if(empty($genre) || $genre == 'All'){
    $response_data = [
        "success" => "true",
        "response" => $disks,
    ];
} else {
    $filtered_disks = array_filter($disks, function($disk) use($genre){
        return $disk['genre'] == $genre;
    });
    $response_data = [
        "success" => "true",
        "response" => $filtered_disks,
    ];
}

header('Content-Type: application/json');
echo json_encode($response_data);