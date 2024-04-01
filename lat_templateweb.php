<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Zidan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: khaki;
            color: blue;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        nav {
            background-color: khaki;
            padding: 10px;
            display: flex;
            align-items: center;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: blue;
            font-weight: bold;
        }
        nav a:hover {
            color: darkblue;
        }
        main {
            text-align: center;
            padding: 50px 0;
        }
        footer {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .create-account {
            margin-left: auto;
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .logo {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <img src="logo.png" alt="Logo" class="logo">
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Produk</a>
            <a href="#">Galeri</a>
            <a href="#">Gesbuk</a>
            <button class="create-account">Buat Akun</button>
        </nav>
    </header>
    <main>
        <div style="height: 500px">
            Halaman Depan
        </div>
    </main>
    <footer>
        Copyright @dono - 2024
    </footer>
</body>
</html>
