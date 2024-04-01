<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Zidan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        .top-header {
            background-color: #ce2e2e;
            color: white;
            padding: 5px;
            text-align: right;
            font-size: 0.8em;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .top-header .icon {
            margin-right: px;
        }
        .wa-ig {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }
        .wa-ig span {
            margin-right: 5px;
        }
        header {
            background-color: white;
            color: black;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        nav {
            background-color: white;
            padding: 10px;
            display: flex;
            align-items: center;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #ce2e2e; 
            font-weight: bold;
        }
        nav a:hover {
            color: darkred; 
        }
        .create-account {
            padding: 10px 20px;
            background-color: #ce2e2e;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .logo {
            color: red;
            font-size: 24px;
            margin-right: 10px;
        }
        .logo-text {
            font-size: 1.2em;
            color: #ce2e2e;
            font-weight: bold;
        }
        .unique-font {
            font-family: 'Pacifico', cursive;
            font-size: 1.2em;
            color: #ce2e2e;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="top-header">
        <div class="wa-ig">
            <span class="icon"><i class="fab fa-whatsapp" style="font-size: 24px;"></i></span>
            <span>089531085234</span>
        </div>
        <div class="wa-ig">
            <span class="icon"><i class="fab fa-instagram" style="font-size: 24px;"></i></span>
            <span>planetstore.id</span>
        </div>
    </div>
    <header>
        <div>
        <i class='fab fa-google-wallet' style='font-size:38px;color:red'></i>
            <span class="logo-text">PlanetStore</span>
        </div>
        <nav>
            <?php
            foreach ($menu_atas as $key => $value) {
                echo "<a href='index.php?hal=$key'>$value</a> | ";
            }
            ?>
            <a href="#" class="create-account">Buat Akun</a>
        </nav>
    </header>
</body>
</html>
