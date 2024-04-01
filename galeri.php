<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <style>
        .gallery-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .gallery {
            margin: 10px;
            border: 1px solid #ccc;
            padding: 10px;
            width: 300px; 
            height: 300px;
            text-align: center;
            box-sizing: border-box;
        }
        .gallery img {
            max-width: 100%;
            max-height: 100%;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Galeri</h2>
    <div class="gallery-container">
        <?php

        $images = array(
            "gambar/image1.jpg",
            "gambar/image2.jpg",
            "gambar/image3.jpg",
            "gambar/image4.jpg",
            "gambar/image5.jpg",
            "gambar/image6.jpg",
            "gambar/image7.jpg",
            "gambar/image8.jpg",
            "gambar/image9.jpg",
            "gambar/image10.jpg",
            "gambar/image11.jpg",
            "gambar/image12.jpg"
        );
        foreach ($images as $image) {
            echo '<div class="gallery">';
            echo '<img src="' . $image . '" alt="Gallery Image">';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
