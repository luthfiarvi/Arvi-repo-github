<?php
date_default_timezone_set('Asia/Jakarta'); // Set timezone

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lat = $_POST['lat'] ?? null;
    $lon = $_POST['lon'] ?? null;

    if ($lat && $lon) {
        $ip = $_SERVER['REMOTE_ADDR'];
        $time = date('Y-m-d H:i:s');

        $data = "$time - IP: $ip - Latitude: $lat - Longitude: $lon\n";
        file_put_contents(__DIR__ . '/data/locations.txt', $data, FILE_APPEND);
    }
}
?>
