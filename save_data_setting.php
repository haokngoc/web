<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ipAddress = $_POST["ip-address"];
    $loggingMethod = $_POST["logging-method"];
    $loggingLevel = $_POST["logging-level"];
    $wirelessMode = $_POST["wireless-mode"];
    $wirelessSSID = $_POST["wireless-SSID"];
    $wirelessPassPhrase = $_POST["wireless-Pass-Phrase"];

    // Đọc dữ liệu từ tệp JSON hiện tại (nếu có)
    $jsonFileName = 'data.json';
    $jsonData = file_exists($jsonFileName) ? json_decode(file_get_contents($jsonFileName), true) : array();

    // Thêm thông tin mới vào mảng dữ liệu
    $jsonData['settings']['ip-address'] = $ipAddress;
    $jsonData['settings']['logging-method'] = $loggingMethod;
    $jsonData['settings']['logging-level'] = $loggingLevel;
    $jsonData['settings']['wireless-mode'] = $wirelessMode;
    $jsonData['settings']['wireless-SSID'] = $wirelessSSID;
    $jsonData['settings']['wireless-Pass-Phrase'] = $wirelessPassPhrase;

    // Chuyển đổi mảng thành định dạng JSON và lưu vào tệp
    $json_data = json_encode($jsonData, JSON_PRETTY_PRINT);
    file_put_contents($jsonFileName, $json_data);

    header("Location: home.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
