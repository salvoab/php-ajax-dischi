<?php
include __DIR__ . '/disks.php';

$response_data = [
    "success" => "true",
    "response" => $disks,
];

header('Content-Type: application/json');
echo json_encode($response_data);