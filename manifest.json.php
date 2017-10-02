<?php
header('Content-Type: application/manifest+json');
$manifest = [
    "name" => "Push Demo",
    "short_name" => "Push Demo",
    "start_url" => "./index.html?homescreen=1",
    "display" => "standalone",
    "gcm_sender_id" => "82415342949",
    "icons" => [
        "src" => "images/icon-192x192.png",
        "sizes"=> "192x192",
        "type" => "image/png"
    ]
];
echo json_encode($manifest);