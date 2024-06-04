<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Alışveriş</title>
  <style>
    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .menu-category {
      margin-bottom: 20px;
    }

    .menu-category-title {
      cursor: pointer;
      padding: 10px;
      background-color: #f4f4f4;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .menu-category-title img {
      width: 100%;
      height: auto;
    }

    .menu-category-title h2 {
      margin: 0;
      font-size: 1.5rem;
    }

    .menu-category-content {
      padding: 10px;
      border: 1px solid #ddd;
      border-top: none;
      border-radius: 0 0 5px 5px;
      background-color: #fff;
    }

    .menu-item {
      margin-bottom: 10px;
      padding: 10px;
      background-color: #f9f9f9;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .menu-item-name {
      font-weight: bold;
    }

    .menu-item-price {
      color: #555;
    }

    .add-to-cart-btn {
      display: inline-block;
      padding: 8px 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .add-to-cart-btn:hover {
      background-color: #45a049;
    }

    .cart-container {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      padding: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .cart-icon {
      width: 40px;
      height: auto;
    }

    .cart-item-count {
      background-color: #FF5722;
      color: white;
      border-radius: 50%;
      padding: 4px;
      font-size: 14px;
      margin-left: 5px;
    }
  </style>
</head>
<body>
<div class="container">
  <?php
  // Veritabanı bağlantısı
  include "baglanti.php";

  $sql_categories = "SELECT * FROM kategoritablo"; // Kategorilerinizi alacak SQL sorgusunu buraya yazın
  $result_categories = sqlsrv_query($conn, $sql_categories);

  if ($result_categories === false) {
    die(print_r(sqlsrv_errors(), true)); // Hata mesajını yazdırır
  }

  if (sqlsrv_has_rows($result_categories)) {
    // Kategoriler için döngü
    while ($row_category = sqlsrv_fetch_array($result_categories, SQLSRV_FETCH_ASSOC)) {
      $category_id = $row_category['kategori_id'];
      $category_name = $row_category['ad'];

      // Kategori başlığı ekle
      echo '<div class="menu-category">';
      echo '<div class="menu-category-title collapse-toggle collapsed" role="tab" data-target="#menu' . $category_name . 'Content" data-toggle="collapse" aria-expanded="false">';
      echo '<div class="bg-image"><img src="http://y_assets.suelo.pl/soup/img/photos/menu-title-' . strtolower($category_name) . '.jpg" alt=""></div>';
      echo '<h2 class="title">' . $category_name . '</h2>';
      echo '</div>';

      // Ürünleri al
      $sql_products = "SELECT * FROM uruntablo WHERE kategori_id = $category_id";
      $result_products = sqlsrv_query($conn, $sql_products);

      if ($result_products === false) {
        die(print_r(sqlsrv_errors(), true)); // Hata mesajını yazdırır
      }

      if (sqlsrv_has_rows($result_products)) {
        // Ürünler için döngü
        echo '<div id="menu' . $category_name . 'Content" class="menu-category-content collapse" role="tabpanel">';
        echo '<div class="p-4">';
        echo '<div class="row gutters-sm">';
        while ($row_product = sqlsrv_fetch_array($result_products, SQLSRV_FETCH_ASSOC)) {
          $product_name = $row_product['urun_ad'];
          $product_price = $row_product['urun_fiyat'];

          // Ürünleri listele
          echo '<div class="col-md-6">';
          echo '<div class="menu-item">';
          echo '<div class="menu-item-name">' . $product_name . '</div>';
          echo '<div class="menu-item-price">' . $product_price . '</div>';
          echo '<button class="add-to-cart-btn">Sepete Ekle</button>'; // Sepete Ekle butonu
          echo '</div>';
          echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
      }
      echo '</div>'; // Kategori div kapanışı
    }
  } else {
    echo "0 results";
  }

  sqlsrv_free_stmt($result_categories); // Kategoriler sorgu nesnesini serbest bırak
  sqlsrv_close($conn); // Bağlantıyı kapat
  ?>
</div>


<div class="cart-container">
  <img src="assets/img/sepet.png" alt="">
  <span class="cart-item-count">0</span>
  <div class="cart-items" style="display: none;">



    <!-- JavaScript -->
    <script>
      // Sepet sayacını, sepete ekle butonlarını, sepet sembolünü ve sepeti seç
      const cartItemCount = document.querySelector('.cart-item-count');
      const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
      const cartIcon = document.querySelector('.cart-icon');
      const cartItemsContainer = document.querySelector('.cart-items');

      // Başlangıçta sepet sayacını ve sepeti sıfırla
      let itemCount = 0;
      let cartItems = [];

      // Her "Sepete Ekle" butonu için tıklama olayını ekle
      addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
          // Ürün eklediğinde sepet sayısını güncelle
          itemCount++;
          cartItemCount.textContent = itemCount;

          // Ürünü sepete ekle
          const productName = button.parentNode.querySelector('.menu-item-name').textContent;
          const productPrice = button.parentNode.querySelector('.menu-item-price').textContent;
          cartItems.push({ name: productName, price: productPrice });

          // Sepetteki ürünleri göster
          renderCartItems();
        });
      });

      // Sepet sembolüne tıkladığında sepetteki ürünleri gösteren fonksiyon
      cartIcon.addEventListener('click', () => {
        if (cartItems.length > 0) {
          if (cartItemsContainer.style.display === 'none') {
            renderCartItems();
            cartItemsContainer.style.display = 'block';
          } else {
            cartItemsContainer.style.display = 'none';
          }
        }
      });

      // Sepetteki ürünleri gösteren fonksiyon
      function renderCartItems() {
        cartItemsContainer.innerHTML = '';
        cartItems.forEach(item => {
          const itemElement = document.createElement('div');
          itemElement.textContent = `${item.name} - ${item.price}`;
          cartItemsContainer.appendChild(itemElement);
        });

        // Sepetteki ürünleri gösterdikten sonra, cart-items alanını görünür hale getir
        cartItemsContainer.style.display = 'block';
      }

    </script>

</body>
</html>


