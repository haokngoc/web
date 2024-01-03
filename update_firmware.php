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
    <p><Strong>Select Firmware Image</Strong></p>
    <p>The Update Firmware function is used to update the receptor firmware.</p>
    <form action="save_data_updateFW.php" method="post">
        <input type="text" id="firmware" name="firmware">
        <label for="firmware">Browse</label>
        <br>
        <button type="submit" name="update-button">Update Firmware</button>
    </form>
</div>
</body>
</html>
