<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ipAddress = $_POST["ip-address"];
    $loggingMethod = $_POST["logging-method"];
    $loggingLevel = $_POST["logging-level"];
    $wirelessMode = $_POST["wireless-mode"];
    $wirelessSSID = $_POST["wireless-SSID"];
    $wirelessPassPhrase = $_POST["wireless-Pass-Phrase"];


    $xmlFileName = 'data.xml';
    $xmlString = file_get_contents($xmlFileName);
    $xml = new SimpleXMLElement($xmlString);

    $settings = $xml->addChild('settings');
    $settings->addChild('ip-address', $ipAddress);
    $settings->addChild('logging-method', $loggingMethod);
    $settings->addChild('logging-level', $loggingLevel);
    $settings->addChild('wireless-mode', $wirelessMode);
    $settings->addChild('wireless-SSID', $wirelessSSID);
    $settings->addChild('wireless-Pass-Phrase', $wirelessPassPhrase);
    file_put_contents($xmlFileName, $xml->asXML());


    header("Location: home.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
