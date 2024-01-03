<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin từ form
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username === "admin" && $password === "123123") {
        $xml = new SimpleXMLElement('<data></data>');
        $xml->addChild('username', $username);
        $xml->addChild('password', $password);
        $xmlString = $xml->asXML();
        $xmlFileName = 'data.xml';
        $file = fopen($xmlFileName, 'w');
        if ($file) {
            fwrite($file, $xmlString);
            fclose($file);
            header("Location: home.php");
            exit();
        } else {
            echo "Error writing to XML file.";
            header("Location: index.php");
            exit();
        }
    } else {
        header("Location: authentication_failed.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>