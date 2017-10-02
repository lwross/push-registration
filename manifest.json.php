<?php
header('Content-Type: application/manifest+json');
$icons = (object) array("src" => "images/icon-192x192.png",
        "sizes"=> "192x192",
        "type" => "image/png");
$manifest = [
    "name" => "Push Demo",
    "short_name" => "Push Demo",
    "start_url" => "./index.html?homescreen=1",
    "display" => "standalone",
    "gcm_sender_id" => getenv('GCM_SENDER_ID'),
    "icons" => [
        $icons
    ]
];
echo json_encode($manifest);