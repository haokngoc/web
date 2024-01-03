<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<nav>
<h1>Control Panel</h1>
    <ul>
        <li><a href="settings.php">Settings</a></li>
        <li><a href="change_password.php">Change Password</a></li>
        <li><a href="update_firmware.php">Update Firmware</a></li>
        <li><a href="information.php">Information</a></li>
        <li><a href="logfile.php">LogFile</a></li>
        <li><a href="update_country_codes.php">Update Country Codes</a></li>
        <li><a href="factory_image.php">Factory Image</a></li>
    </ul>
</nav>
<div class="container">
    <form action="save_data_setting.php" method="post">
        <p><strong>Network Settings</strong></p>
        <label for="ip-address">IP Address:</label>
        <input type="text" id="ip-address" name="ip-address">

        <p><strong>Logging Settings</strong></p>
        <label for="logging-method">Logging Method:</label>
        <input type="text" id="logging-method" name="logging-method">
        <br>
        <label for="logging-level">Logging Level:</label>
        <input type="text" id="logging-level" name="logging-level">

        <p><strong>Wireless Settings</strong></p>
        <label for="wireless-mode">Wireless Mode:</label>
        <input type="text" id="wireless-mode" name="wireless-mode">
        <p>Valid SSID and Pas Phrase characters are 0-9,A-Z,a-z,!#%+,-,.?[]^_}</p>
        <br>
        <label for="wireless-SSID">Wireless SSID:</label>
        <input type="text" id="wireless-SSID" name="wireless-SSID">
        <br>
        <label for="wireless-Pass-Phrase">Wireless Pass Phrase:</label>
        <input type="text" id="wireless-Pass-Phrase" name="wireless-Pass-Phrase">
        <br>
        <button type="submit" name="update-button">Update</button>
    </form>
</div>
</body>
</html>
