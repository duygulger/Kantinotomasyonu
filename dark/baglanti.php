<?php
// SQL Server bağlantısı için PHP kodu
$serverName = "DUYGU\SQLEXPRESS"; // SQL Server sunucu adı veya IP adresi
$connectionOptions = array(
    "Database" => "kampuskantin",
    "Uid" => "", // SQL Server kullanıcı adınızı buraya girin
    "PWD" => "", // SQL Server şifrenizi buraya girin
//  "CharacterSet" => "UTF-8" // Karakter seti burada belirtiliyor
);

// Bağlantıyı kurar
$conn = sqlsrv_connect($serverName, $connectionOptions);
if (!$conn) {
    die("Bağlantı başarısız: " . print_r(sqlsrv_errors(), true));

}
