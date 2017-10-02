<html lang="en">
  <head>

    <title>Push Messaging &amp; Notifications</title>

    <link rel="icon" href="../images/favicon.ico">
    <link rel="manifest" href="manifest.json">

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
