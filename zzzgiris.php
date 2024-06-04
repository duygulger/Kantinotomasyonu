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

// Oturumu başlat
session_start();

// Form gönderimini ele al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["sign_in"])) {
    // Giriş formu gönderildiyse
    $kullanici_adi = $_POST["email"]; // Giriş formundan gelen kullanıcı adı
    $sifre = $_POST["password"]; // Giriş formundan gelen şifre

    // SQL sorgusu - kullanıcı adı ve şifreye göre kullanıcıyı seç
    $sql = "SELECT ad, soyad FROM musteritablo WHERE kullanici_adi='$kullanici_adi' AND sifre='$sifre'";
    $result = sqlsrv_query($conn, $sql); // sqlsrv_query ile sorguyu çalıştır

    // Eğer sorgu başarılı ise
    if ($result !== false) {
      // Kullanıcı bulunursa
      if (sqlsrv_has_rows($result)) {
        // Kullanıcı bilgilerini al
        $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

        // Kullanıcının adı ve soyadını $_SESSION değişkenlerine ata
        $_SESSION['ad'] = $row['ad'];
        $_SESSION['soyad'] = $row['soyad'];

        // Diğer sayfaya yönlendir
        header("Location: zzzanasayfa.php");
        exit;
      } else {
        // Kullanıcı bulunamadıysa, hata mesajı göster veya yönlendir
        echo "Hatalı kullanıcı adı veya şifre.";
      }
    } else {
      // Sorgu başarısız ise hata mesajını göster
      die(print_r(sqlsrv_errors(), true));
    }
  }
}

// Veritabanı bağlantısını kapat
sqlsrv_close($conn);



// Kullanıcı girişini doğrulamak için fonksiyon
function validateUser($conn, $email, $password) {

  $query = "SELECT * FROM musteritablo WHERE kullanici_adi = ? AND sifre = ?";
  $params = array($email, $password);
  $stmt = sqlsrv_query($conn, $query, $params);

  if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
  }

  $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
  if ($row) {
    return true; // Kullanıcı mevcut
  } else {
    return false; // Kullanıcı mevcut değil veya kimlik bilgileri yanlış
  }
}

// Form gönderimini ele al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["sign_up"])) {
    // Yeni kayıt oluşturma formu gönderildiyse
    $name = $_POST["name"];
    $soyad = $_POST["soyad"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    // Eğer email 'gop.edu.tr' uzantılı değilse
    if (strpos($email, 'gop.edu.tr') === false) {
      echo "<p>Lütfen 'gop.edu.tr' uzantılı mail adresiniz ile kayıt olun.</p>";
    } else {
      addUser($conn, $name, $soyad, $email, $password, $phone, $address);
      echo "<p>Kayıt başarılı! Şimdi giriş yapabilirsiniz.</p>";
    }
  } elseif (isset($_POST["sign_in"])) {
    // Giriş formu gönderildiyse
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (validateUser($conn, $email, $password)) {
      echo "<p>Giriş başarılı!</p>";
      // Başarılı giriş sonrası yapılacak işlemleri gerçekleştir
      header("Location: anasayfaa.php");
      exit();
    } else {
      echo "<p>Geçersiz email veya şifre.</p>";
    }
  }
}

// Yeni kullanıcı kaydını eklemek için fonksiyon
function addUser($conn, $name, $soyad, $email, $password, $phone, $address) {
  // Eğer email 'gop.edu.tr' uzantılı değilse
  if (strpos($email, 'gop.edu.tr') === false) {
    echo "<p>Lütfen 'gop.edu.tr' uzantılı mail adresiniz ile kayıt olun.</p>";
    return; // Fonksiyondan çık
  }

  // Ad, soyad, şifre, telefon ve adres alanlarını kontrol et
  if (empty($name) || empty($soyad) || empty($password) || empty($phone) || empty($address)) {
    echo "<p>Lütfen boş alanları doldurun.</p>";
    return; // Fonksiyondan çık
  }

  $phone = preg_replace('/\D/', '', $phone); // Sadece sayıları al
  $phone = substr($phone, 0, 10); // İlk 10 karakteri al

  $query = "INSERT INTO musteritablo (ad, soyad, kullanici_adi, sifre, telno, adres1) VALUES (?, ?, ?, ?, ?, ?)";
  $params = array($name, $soyad, $email, $password, $phone, $address);

  // Veritabanına ekleme işleminden önce gerekli kontrolleri yap
  if (empty($params[0]) || empty($params[1]) || empty($params[2]) || empty($params[3]) || empty($params[4]) || empty($params[5])) {
    echo "<p>Lütfen boş alanları doldurun.</p>";
    return; // Fonksiyondan çık
  }

  $stmt = sqlsrv_query($conn, $query, $params);

  if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="giris.css">
</head>
<body>
<div class="container" id="container">
  <div class="form-container sign-up-container">
    <form action="#" method="post">
      <h1>Hesap oluştur</h1>
      <span>Lütfen 'gop.edu.tr' uzantılı mail adresiniz ile kayıt oluşturunuz</span>
      <input type="text" name="name" placeholder="Ad" />
      <input type="text" name="soyad" placeholder="Soyad" />
      <input type="email" name="email" placeholder="Email" />
      <input type="password" name="password" placeholder="Şifre" />
      <input type="tel" name="phone" placeholder="Telefon" />
      <input type="text" name="address" placeholder="Adres" />
      <button type="submit" name="sign_up">Kayıt Ol</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form action="#" method="post">
      <h1>Giriş Yap</h1>
      <input type="email" name="email" placeholder="Email" />
      <input type="password" name="password" placeholder="Şifre" />
      <button type="submit" name="sign_in">Giriş Yap</button>
    </form>
  </div>

  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Tekrar<br> Hoşgeldin</h1>
        <p> </p>
        <button class="ghost" id="signIn">Giriş Yap</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Merhaba, Hoşgeldin</h1>
        <p>Lütfen 'gop.edu.tr' uzantılı mail adresiniz ile giriş yapınız</p>
        <button class="ghost" id="signUp">Kayıt Ol</button>
      </div>
    </div>
  </div>
</div>
<script src="giris.js"></script>
</body>
</html>
