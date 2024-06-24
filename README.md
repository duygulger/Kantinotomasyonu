# Kampüs Kantin

Kampüs Kantin, bir restoran yemek web projesi ve kantin otomasyonudur. Bu proje, PHP, HTML, CSS ve JavaScript kullanılarak geliştirilmiştir. Proje, kullanıcıların kantin menüsüne göz atmalarına, sipariş vermelerine ve yönetici paneli ile kantin yönetimini kolaylaştırmalarına olanak tanır.

## Özellikler

### Kullanıcı Özellikleri
- **Kullanıcı oluşturma**: Yeni kullanıcıların sisteme kaydolmasına olanak tanır.
- **Giriş sayfası**: Mevcut kullanıcıların sisteme giriş yapmasını sağlar.
- **Kaydol sayfası**: Yeni kullanıcıların hesap oluşturması için gerekli formu içerir.
- **Anasayfa**: Kullanıcıların kantin hakkında genel bilgiye ulaşabileceği ve menüye göz atabileceği ana sayfa.
- **Menüler**: Kullanıcıların kantinde sunulan tüm ürünleri görüntüleyebileceği bölüm.

### Yönetici Paneli
- **Ürün ekleme**: Yeni ürünlerin kantin menüsüne eklenmesini sağlar.
- **Ürün silme**: Mevcut ürünlerin menüden kaldırılmasını sağlar.
- **Ürün güncelleme**: Mevcut ürün bilgilerini güncelleyebilme olanağı.
- **Kullanıcı işlemleri**: Kullanıcı hesaplarını yönetme ve düzenleme imkanı.

## Kurulum

1. **Depoyu klonlayın:**
   ```
   git clone https://github.com/kullaniciadi/kampus-kantin.git
   ```
Gerekli dosyaları sunucuya yükleyin.

Veritabanını yapılandırın:

Veritabanınızı oluşturun ve `config.php` dosyasında veritabanı bağlantı bilgilerini güncelleyin.

Sunucu yapılandırması:

PHP ve MySQL destekli bir sunucuya ihtiyacınız olacak. Apache veya Nginx önerilir.

PHP sürümünüzün en az 7.0 veya daha yeni bir sürüm olduğundan emin olun.

Bağımlılıkları yükleyin:

Gerekli kütüphaneleri ve bağımlılıkları yüklemek için Composer kullanabilirsiniz (eğer varsa).

## Kullanım

### Uygulamayı başlatın:

Sunucuyu başlatın ve tarayıcınızda projenin yüklü olduğu dizini açın.

### Giriş yapın veya kaydolun:

Mevcut bir hesapla giriş yapın veya yeni bir hesap oluşturun.

### Kullanıcı arayüzü:

- Anasayfa ve menüleri görüntüleyin.
- Ürünleri seçin ve sipariş verin.

### Yönetici paneli:

- Yönetici hesabınızla giriş yapın.
- Ürün ekleyin, silin veya güncelleyin.
- Kullanıcı hesaplarını yönetin.
- kampuskantin/dark klasöründen ise adminpanele erişebilirsiniz.

## Katkıda Bulunma

1. **Fork edin**: Bu projeyi GitHub üzerinde fork ederek kendi depo kopyanızı oluşturun.
2. **Branch oluşturun**: Yeni bir özellik veya düzeltme için `feature/ozellik-adi` şeklinde bir branch oluşturun.
3. **Commit yapın**: Yaptığınız değişiklikleri commit edin ve branch'e push edin.
4. **Pull Request oluşturun**: GitHub üzerinde bir pull request oluşturun ve değişikliklerinizi gözden geçirin.
