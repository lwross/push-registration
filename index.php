<?php
/*
if (file_exists ( ABSPATH . 'manifest.json' )) {
  $oldManifestJson = file_get_contents ( ABSPATH . 'manifest.json' );
} else {
  $oldManifestJson = '{}';
}
$data = json_decode ( $oldManifestJson, true );

$data ['gcm_sender_id'] = $settings ['gcm_sender_id'];
$data ['gcm_user_visible_only'] = true;
$newManifestJson = json_encode ( $data );
if ( is_writable ( ABSPATH . 'manifest.json' ) || !file_exists ( ABSPATH . 'manifest.json' ) && is_writable ( ABSPATH ) ) {
  file_put_contents ( ABSPATH . 'manifest.json', $newManifestJson );
} else {
  // display an error
}
*/
?>
<html lang="en">
  <head>

    <title>Push Messaging &amp; Notifications</title>

    <link rel="icon" href="../images/favicon.ico">
    <link rel="manifest" href="manifest.json.php">

  </head>

  <body>
    <h1>Register for Email & Web Push Notifications</h1>

    <table>
        <tr>
            <td>Email</td>
            <td><input id="userEmail" type="text" /></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input id="userFirstName" type="text" /></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input id="userLastName" type="text" /></td>
        </tr>
    </table>
    
    <p>
        <button class="js-push-button" disabled>
          Register for Push Notifications
        </button>
    </p>

    <br />
    <br />

    <div class="js-curl-command"></div>

    <script src="config.js.php"></script>
    <script src="demo.js"></script>
    <script src="main.js"></script>
  </body>
</html>
