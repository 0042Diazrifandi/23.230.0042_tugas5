<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Transaksi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
            /* Styling untuk navbar */
            nav {
            margin-bottom: 20px;
            background-color: #007BFF;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        /* Styling untuk tautan navbar */
        nav a {
            color: #FFFFFF;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        nav a:hover {
            color: #FFD700; /* Warna emas saat hover */
            text-decoration: underline;
            transform: scale(1.1); /* Efek zoom saat hover */
        }

        /* Styling untuk teks di tengah */
        h1 {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: #343a40;
            font-size: 2rem;
        }

        /* Container utama */
        .container {
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Tombol tambah data */
        .btn-tambah {
            margin-bottom: 10px;
            display: inline-block;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .btn-tambah:hover {
            background-color: #0056b3;
            text-decoration: none;
        }

        /* Styling tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            text-align: center;
            padding: 12px;
            border: 1px solid #dee2e6;
        }

        th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #007BFF;
        }

        /* Styling untuk tombol aksi */
        .btn-edit {
            background-color: #ffc107;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-hapus {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-edit:hover, .btn-hapus:hover {
            opacity: 0.8;
        }

        /* Custom Button Styles */
        a.btn, .btn {
            display: inline-block;
            outline: none;
            text-align: center;
            text-decoration: none;
            font-weight: 300;
            letter-spacing: 1px;
            vertical-align: middle;
            border: 1px solid;
            transition: all 0.2s ease;
        }

        .btn-radius {
            border-radius: 3px;
        }

        /* Button Colors */
        .btn-blue {
            color: #4682B4;
            border-color: #4682B4;
        }
        .btn-blue:hover {
            background: #4682B4;
            color: #fff;
        }

        .btn-orange {
            color: #FF8C00;
            border-color: #FF8C00;
        }
        .btn-orange:hover {
            background: #FF8C00;
            color: #fff;
        }

        .btn-red {
            color: #B22222;
            border-color: #B22222;
        }
        .btn-red:hover {
            background: #B22222;
            color: #fff;
        }

        hr {
            border: 1px solid #e9ecef;
            margin: 20px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <nav>
        <ul>
            <li><a href="index.php?controller=home&action=index">Home</a></li>
            <li><a href="index.php?controller=barang&action=index">Barang</a></li>
            <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
            <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
        </ul>
    </nav>
<hr>
    <h2>Daftar Transaksi</h2>
    <a href="index.php?controller=transaksi&action=create"  class="btn btn-medium btn-blue">Tambah Data</a>
    <table>
        <tr>
            <th>No</th>
            <th>ID Transaksi</th>
            <th>Kode Barang</th>
            <th>ID Pelanggan</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Tanggal Transaksi</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($transaksiList as $key => $transaksi): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $transaksi['id_transaksi'] ?></td>
                <td><?= $transaksi['kode_barang'] ?></td>
                <td><?= $transaksi['id_pelanggan'] ?></td>
                <td><?= $transaksi['jumlah'] ?></td>
                <td><?= $transaksi['total_harga'] ?></td>
                <td><?= $transaksi['tanggal_transaksi'] ?></td>
                <td><a href="index.php?controller=transaksi&action=detail&id=<?= $transaksi['id_transaksi'] ?>">Detail</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>