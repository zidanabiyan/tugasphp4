<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Home</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .header img {
      width: 100%;
      max-height: 400px;
      object-fit: cover;
    }

    .content {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .produk, .artikel {
      flex-basis: 48%;
    }

    .produk h2, .artikel h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .produk p, .artikel p {
      font-size: 16px;
    }

    .artikel-item {
      margin-bottom: 20px;
      background-color: #f9f9f9;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .artikel-item:hover {
      background-color: #ddd;
    }

    .artikel-item h3 {
      font-size: 18px;
      margin-bottom: 5px;
    }

    .artikel-item p {
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <img src="gambar/home.jpg" alt="Gambar Besar">
    </div>
    <div class="content">
      <div class="produk">
        <h2>Produk</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus quo minima doloremque nemo nobis, quae minus numquam esse ducimus, libero unde placeat saepe necessitatibus impedit. Animi nulla eligendi quod sequi!</p>
        <p>Nama : Rifqi Zaidan Abiyan</p>
        <p>NIM : 11221108</p>
        <P>Kampus : Universitas Serang Raya</P>
        <p>TUGAS PHP 4</p>
      </div>
      <div class="artikel">
        <h2>Artikel</h2>
        <div class="artikel-item">
          <h3>Artikel 1</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, tempore ipsa dicta animi soluta a illum odio fugiat sequi minus quae cupiditate eos accusantium voluptatem totam magnam, iste quos iusto.</p>
        </div>
        <div class="artikel-item">
          <h3>Artikel 2</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque a soluta officiis, aut consequuntur, repellat earum sapiente quaerat quasi qui numquam officia similique quas, consectetur laudantium porro praesentium blanditiis aliquam.</p>
        </div>
        <div class="artikel-item">
          <h3>Artikel 3</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis voluptas reiciendis voluptatibus ipsam quae qui! Consequuntur veritatis, nulla quo eos expedita alias doloribus sapiente delectus qui tempore perspiciatis, vero quaerat?</p>
        </div>
        <div class="artikel-item">
          <h3>Artikel 4</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi quidem expedita fugiat ut libero neque molestiae, dolorem, vel enim facilis ullam dicta consectetur ad fuga rerum nemo amet officia. Impedit?</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
