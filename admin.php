<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Lokasi Terkirim</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #ff9800;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            color: #2196F3;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Data Lokasi yang Masuk</h2>
    <table>
        <thead>
            <tr>
                <th>Waktu</th>
                <th>IP</th>
                <th>Koordinat</th>
                <th>Lihat di Maps</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $file = 'locations.txt';
            if (file_exists($file)) {
                $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                foreach ($lines as $line) {
                    if (preg_match('/^(.*?) - IP: (.*?) - Latitude: (.*?) - Longitude: (.*)$/', $line, $matches)) {
                        $time = trim($matches[1]);
                        $ip = trim($matches[2]);
                        $lat = trim($matches[3]);
                        $lon = trim($matches[4]);
                        $mapsUrl = "https://www.google.com/maps?q=$lat,$lon";
                        echo "<tr>
                                <td>$time</td>
                                <td>$ip</td>
                                <td>$lat, $lon</td>
                                <td><a href='$mapsUrl' target='_blank'>Lihat di Google Maps</a></td>
                              </tr>";
                    } else {
                        echo "<tr><td colspan='4'>Format data salah: $line</td></tr>";
                    }
                }
            } else {
                echo "<tr><td colspan='4'>Belum ada data lokasi.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
