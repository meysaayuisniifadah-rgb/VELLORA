<?php

require_once "config/database.php";

$query = mysqli_query(
    $conn,
    "SELECT * FROM produk
     ORDER BY id DESC
     LIMIT 6"
);

?>

<!DOCTYPE html>
<html>

<head>

    <title>VELLORA - Flatshoes</title>

    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

<div class="navbar">

    <div class="container">

        <a href="index.php">
            VELLORA
        </a>

        <a href="produk.php">
            Koleksi
        </a>

        <a href="tentang.php">
            Tentang Kami
        </a>

    </div>

</div>

<section class="hero">

    <div class="container">

        <p>
            VELLORA
        </p>

        <h1>
            Elegant Steps,<br>
            Everyday.
        </h1>

        <p>
            Flatshoes nyaman dengan desain simpel
            dan elegan untuk menemani setiap langkah.
        </p>

        <a
            href="produk.php"
            class="btn"
        >
            Lihat Koleksi
        </a>

    </div>

</section>

<div class="container">

    <h2>Koleksi Terbaru</h2>

    <p>
        Pilihan flatshoes VELLORA untuk melengkapi
        gaya sehari-hari dengan nyaman dan tetap elegan.
    </p>

    <div class="grid">

        <?php while ($row = mysqli_fetch_assoc($query)): ?>

        <div class="card">

            <?php if ($row['gambar']): ?>

                <img
                    src="uploads/produk/<?= htmlspecialchars($row['gambar']); ?>"
                    class="product-image"
                >

            <?php endif; ?>

            <p>
                <?= htmlspecialchars($row['kategori']); ?>
            </p>

            <h3>
                <?= htmlspecialchars($row['nama']); ?>
            </h3>

            <strong>
                Rp <?= number_format(
                    $row['harga'],
                    0,
                    ',',
                    '.'
                ); ?>
            </strong>

            <br><br>

            <a
                href="detail.php?id=<?= $row['id']; ?>"
                class="btn"
            >
                Lihat Detail
            </a>

        </div>

        <?php endwhile; ?>

    </div>

</div>

</body>

</html>