<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST['customer'] ?? '';
    $produk = $_POST['produk'] ?? '';
    $jumlah = $_POST['jumlah'] ?? 0;
    
    $harga_produk = [
        "TV" => 4200000,
        "KULKAS" => 3100000,
        "MESIN CUCI" => 3800000
    ];
    
    $total_belanja = isset($harga_produk[$produk]) ? $harga_produk[$produk] * $jumlah : 0;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 20px;
        }
        .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .price-box {
            background-color: #337ab7;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        .price-box table {
            width: 100%;
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="form-box">
                    <h4>Belanja Online</h4>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label><strong>Customer</strong></label>
                            <input type="text" class="form-control" name="customer" placeholder="Nama Customer" required>
                        </div>
                        <div class="form-group">
                            <label><strong>Pilih Produk</strong></label><br>
                            <input type="radio" name="produk" value="TV" required> TV
                            <input type="radio" name="produk" value="KULKAS"> KULKAS
                            <input type="radio" name="produk" value="MESIN CUCI"> MESIN CUCI
                        </div>
                        <div class="form-group">
                            <label><strong>Jumlah</strong></label>
                            <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" required>
                        </div>
                        <button type="submit" class="btn btn-success">Kirim</button>
                    </form>
                </div>
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                <div class="mt-3">
                    <p><strong>Nama Customer:</strong> <?= htmlspecialchars($customer) ?></p>
                    <p><strong>Produk Pilihan:</strong> <?= htmlspecialchars($produk) ?></p>
                    <p><strong>Jumlah Beli:</strong> <?= htmlspecialchars($jumlah) ?></p>
                    <p><strong>Total Belanja:</strong> Rp. <?= number_format($total_belanja, 0, ',', '.') ?>,-</p>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <div class="price-box">
                    <h5>Daftar Harga</h5>
                    <table class="table table-bordered">
                        <tr><td>TV</td><td>Rp. 4.200.000</td></tr>
                        <tr><td>Kulkas</td><td>Rp. 3.100.000</td></tr>
                        <tr><td>Mesin Cuci</td><td>Rp. 3.800.000</td></tr>
                    </table>
                    <p class="text-center"><strong>Harga Dapat Berubah Setiap Saat</strong></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
