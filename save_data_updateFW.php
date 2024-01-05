<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $udfirmware = $_POST["firmware"];
    
    // Đọc dữ liệu từ tệp JSON hiện tại (nếu có)
    $jsonFileName = 'data.json';
    $jsonData = file_exists($jsonFileName) ? json_decode(file_get_contents($jsonFileName), true) : array();

    // Thêm thông tin mới vào mảng dữ liệu
    $jsonData['firmware']['firmware'] = $udfirmware;

    // Chuyển đổi mảng thành định dạng JSON và lưu vào tệp
    $json_data = json_encode($jsonData, JSON_PRETTY_PRINT);
    file_put_contents($jsonFileName, $json_data);

    header("Location: firmware.php");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
