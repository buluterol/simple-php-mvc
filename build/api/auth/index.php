<?php
// Başlık ayarı: JSON verisi döndüğümüzü belirtiyoruz
header('Content-Type: application/json');

// Rastgele 32 haneli bir user_token oluştur
$userToken = generateRandomString(32);

// JSON verisini oluştur
$jsonData = [
    'user_token' => $userToken
];

// JSON verisini ekrana yazdır
echo json_encode($jsonData);

// Rastgele harf/sayı üreten fonksiyon
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>
