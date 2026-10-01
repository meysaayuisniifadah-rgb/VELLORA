<?php

require_once "config/database.php";

$id = isset($_GET['id'])
    ? (int)$_GET['id']
    : 0;

$query = mysqli_query(
    $conn,
    "SELECT * FROM produk
     WHERE id = $id
     LIMIT 1"
);

$produk = mysqli_fetch_assoc($query);

if (!$produk) {

    die("Produk tidak ditemukan.");

}

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?= htmlspecialchars($produk['nama']); ?> - VELLORA
    </title>

    <link
        rel="stylesheet"
        href="assets/style.css"
    >

    <style>

        /* GAMBAR DETAIL PRODUK */

        .detail-product-image {
            width: 100%;
            height: auto;
            max-height: 600px;
            object-fit: contain;
            object-position: center;
            display: block;
            margin: 0 auto 25px;
            border-radius: 4px;
            background: #f8f6f3;
        }

        .detail-image-wrapper {
            width: 100%;
            padding: 10px;
            background: #f8f6f3;
            border-radius: 4px;
            margin-bottom: 25px;
            text-align: center;
        }

    </style>

</head>

<body>

<!-- NAVBAR -->

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

        <a href="auth/login.php">
            Masuk Admin
        </a>

    </div>

</div>


<!-- DETAIL PRODUK -->

<div class="container">

    <div class="card">

        <!-- GAMBAR -->

        <?php if (!empty($produk['gambar'])): ?>

            <div class="detail-image-wrapper">

                <img
                    src="uploads/produk/<?= htmlspecialchars($produk['gambar']); ?>"
                    class="detail-product-image"
                    alt="<?= htmlspecialchars($produk['nama']); ?>"
                >

            </div>

        <?php else: ?>

            <div class="detail-image-wrapper">

                <p>
                    Gambar produk belum tersedia.
                </p>

            </div>

        <?php endif; ?>


        <!-- KATEGORI -->

        <p>
            <?= htmlspecialchars($produk['kategori']); ?>
        </p>


        <!-- NAMA -->

        <h1>
            <?= htmlspecialchars($produk['nama']); ?>
        </h1>


        <!-- DESKRIPSI -->

        <p>
            <?= nl2br(
                htmlspecialchars($produk['deskripsi'])
            ); ?>
        </p>


        <!-- HARGA -->

        <h2>
            Rp <?= number_format(
                $produk['harga'],
                0,
                ',',
                '.'
            ); ?>
        </h2>


        <!-- STOK -->

        <p>
            Stok tersedia:
            <?= htmlspecialchars($produk['stok']); ?>
        </p>


        <br>


        <a
            href="produk.php"
            class="btn"
        >
            Kembali ke Koleksi
        </a>

    </div>

</div>


<!-- FOOTER -->

<?php include "includes/footer.php"; ?>


</body>

</html>