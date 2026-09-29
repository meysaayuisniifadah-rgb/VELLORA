<?php

require_once "config/database.php";

$keyword = $_GET['keyword'] ?? '';

if ($keyword != '') {

    $keyword_safe = mysqli_real_escape_string(
        $conn,
        $keyword
    );

    $query = mysqli_query(
        $conn,
        "SELECT * FROM produk
         WHERE nama LIKE '%$keyword_safe%'
         ORDER BY id DESC"
    );

} else {

    $query = mysqli_query(
        $conn,
        "SELECT * FROM produk
         ORDER BY id DESC"
    );
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Koleksi - VELLORA</title>

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

<div class="container">

    <h1>Koleksi Flatshoes</h1>

    <p>
        Temukan pilihan flatshoes VELLORA
        dengan desain simpel, elegan, dan nyaman
        untuk menemani setiap langkah.
    </p>

    <div class="card">

        <form method="GET">

            <input
                type="text"
                name="keyword"
                placeholder="Cari flatshoes..."
                value="<?= htmlspecialchars($keyword); ?>"
            >

            <button
                type="submit"
                class="btn"
            >
                Cari
            </button>

        </form>

    </div>

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

            <p>
                <?= htmlspecialchars($row['deskripsi']); ?>
            </p>

            <h3>
                Rp <?= number_format(
                    $row['harga'],
                    0,
                    ',',
                    '.'
                ); ?>
            </h3>

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