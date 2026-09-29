<?php

session_start();

require_once "../includes/auth.php";

?>

<!DOCTYPE html>
<html>

<head>

    <title>Tambah Koleksi - VELLORA</title>

    <link rel="stylesheet" href="../assets/style.css">

</head>

<body>

<div class="navbar">

    <div class="container">

        <a href="index.php">
            VELLORA
        </a>

        <a href="index.php">
            Dashboard
        </a>

        <a href="produk.php">
            Koleksi
        </a>

        <a href="../index.php">
            Website
        </a>

        <a href="../auth/logout.php">
            Logout
        </a>

    </div>

</div>

<div class="container">

    <div class="card">

        <h1>Tambah Koleksi</h1>

        <p>
            Tambahkan flatshoes baru ke dalam
            koleksi VELLORA.
        </p>

        <?php include "../includes/flash.php"; ?>

        <form
            action="proses_produk.php"
            method="POST"
            enctype="multipart/form-data"
        >

            <input
                type="hidden"
                name="aksi"
                value="tambah"
            >

            <label>Nama Flatshoes</label>

            <input
                type="text"
                name="nama"
                placeholder="Contoh: Vellora Luna"
                required
            >

            <label>Kategori</label>

            <select name="kategori" required>

                <option value="">
                    Pilih kategori
                </option>

                <option value="Flatshoes Casual">
                    Flatshoes Casual
                </option>

                <option value="Flatshoes Formal">
                    Flatshoes Formal
                </option>

                <option value="Flatshoes Everyday">
                    Flatshoes Everyday
                </option>

            </select>

            <label>Deskripsi</label>

            <textarea
                name="deskripsi"
                rows="5"
                placeholder="Tulis deskripsi mengenai flatshoes..."
                required
            ></textarea>

            <label>Harga</label>

            <input
                type="number"
                name="harga"
                min="0"
                placeholder="Contoh: 249000"
                required
            >

            <label>Stok</label>

            <input
                type="number"
                name="stok"
                min="0"
                placeholder="Masukkan jumlah stok"
                required
            >

            <label>Gambar Flatshoes</label>

            <input
                type="file"
                name="gambar"
                accept=".jpg,.jpeg,.png,.webp"
            >

            <p>
                Format: JPG, JPEG, PNG, atau WEBP.
                Maksimal 2 MB.
            </p>

            <br>

            <button
                type="submit"
                class="btn"
            >
                Simpan Koleksi
            </button>

            <a
                href="produk.php"
                class="btn"
            >
                Kembali
            </a>

        </form>

    </div>

</div>

</body>

</html>