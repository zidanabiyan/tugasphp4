<?php
session_start();

if(isset($_POST['beli'])) {
    $produk_dibeli = $_POST['produk'];
    $_SESSION['keranjang'][] = $produk_dibeli;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .product {
            width: calc(33.33% - 20px);
            margin: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
            background-color: #f9f9f9;
            transition: background-color 0.3s; 
        }
        .product:hover {
            background-color: #e0e0e0; 
        }
        .product img {
            max-width: 100%; 
            max-height: 150px;
            margin-bottom: 10px;
        }
        .product button {
            padding: 10px 20px;
            background-color: #ce2e2e;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $gambar_produk = array(
            "https://awsimages.detik.net.id/visual/2020/07/30/nike-air-jordan-dok-nike-2_169.jpeg?w=650",
            "https://awsimages.detik.net.id/visual/2020/07/30/nike-air-jordan-dok-nike-2_169.jpeg?w=650",
            "https://awsimages.detik.net.id/visual/2020/07/30/nike-air-jordan-dok-nike-2_169.jpeg?w=650",
        );

        for ($i = 1; $i <= 12; $i++) {
            echo "<div class='product'>";
            echo "<img src='" . $gambar_produk[$i % count($gambar_produk)] . "' alt='Produk $i'>";
            echo "<h3>Produk $i</h3>";
            echo "<p>Harga: Rp. " . rand(10000, 100000) . "</p>";
            echo "<form method='post'>";
            echo "<input type='hidden' name='produk' value='Produk $i'>";
            echo "<button type='submit' name='beli'>Beli</button>";
            echo "</form>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
