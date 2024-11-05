<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
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

        /* Styling untuk garis horizontal */
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
        <h1>Selamat datang di aplikasi penjualan</h1>

        <div id="content">
            <!-- Konten halaman akan ditampilkan di sini -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
