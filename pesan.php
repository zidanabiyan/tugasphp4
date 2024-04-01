<?php
session_start(); 

if(isset($_GET['hapus'])) {
    $index = $_GET['hapus'];
    unset($_SESSION['keranjang'][$index]);
}

if(isset($_POST['checkout'])) {
    unset($_SESSION['keranjang']);
    echo "<script>alert('Pesanan telah di-checkout. Terima kasih atas pembelian Anda!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
        }
        .item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .item .hapus {
            color: red;
            cursor: pointer;
        }
        .checkout {
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
        <h2>Daftar Pembelian</h2>
        <div class="items">
            <?php
            if (isset($_SESSION['keranjang'])) {
                $total_harga = 0;
                foreach ($_SESSION['keranjang'] as $index => $produk) {
                    $total_harga += rand(10000, 100000);
                    echo "<div class='item'>";
                    echo "<span>$produk</span>";
                    echo "<span class='hapus' onclick='hapus($index)'>Hapus</span>";
                    echo "</div>";
                }
                echo "<div class='item'>";
                echo "<span><strong>Total Harga:</strong></span>";
                echo "<span><strong>Rp. $total_harga</strong></span>";
                echo "</div>";
            } else {
                echo "<div class='item'>Belum ada pembelian.</div>";
            }
            ?>
        </div>
        <form method="post">
            <button class="checkout" type="submit" name="checkout">Checkout</button>
        </form>
    </div>
    <script>
        function hapus(index) {
            if(confirm('Anda yakin ingin menghapus produk ini dari keranjang?')) {
                window.location.href = 'pesan.php?hapus=' + index;
            }
        }
    </script>
</body>
</html>
