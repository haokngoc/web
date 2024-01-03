<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin từ form
    $newPassword = $_POST["new_pasword"];
    $confirmNewPassword = $_POST["confirm_new_pasword"];
    $xmlFileName = 'data.xml';
    $xmlString = file_get_contents($xmlFileName);
    $xml = new SimpleXMLElement($xmlString);

    $changepw = $xml->addChild('changepw');
    $changepw->addChild('new-password', $newPassword);
    $changepw->addChild('confirm-new-password', $confirmNewPassword);
    file_put_contents($xmlFileName, $xml->asXML());
    header("Location: home.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
