<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $udfirmware = $_POST["firmware"];
    

    $xmlFileName = 'data.xml';
    $xmlString = file_get_contents($xmlFileName);
    $xml = new SimpleXMLElement($xmlString);

    $firmware = $xml->addChild('firmware');
    $firmware->addChild('firmware', $udfirmware);

    file_put_contents($xmlFileName, $xml->asXML());


    header("Location: home.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
