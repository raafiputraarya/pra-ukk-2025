<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background: url(https://images.unsplash.com/photo-1613858749327-c09380ae8116?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)
            center fixed no-repeat;
            background-size: cover;
        }
        .border{
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.3);
        }
    </style>
    <title>Hitung Diskon</title>
</head>
 
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h1 class="text-center m-2 text-light">Aplikasi Hitung Diskon</h1>
            <div class="col-md-4">
                <form method="post" class="border rounded p-2 mt-2 ">
                    <label class="form-label text-light">Harga</label>
                    <input type="number" name="harga" class="form-control" step="0.01" min="0" placeholder="Masukan Harga" autocomplete="off" required onkeypress="return event.charCode >=48 && event.charCode <=57">
                    <label class="form-label text-light pt-2">Diskon (%)</label>
                    <input type="text" maxlength="3" name="diskon" class="form-control" step="0.01" min="0" placeholder="Masukan Diskon" autocomplete="off" required onkeypress="return event.charCode >=48 && event.charCode <=57">
 
                    <input type="submit" name="hitung" class="btn btn-success w-100 p-2 mt-2">
 
                    <input type="reset"  class="btn btn-warning w-100 p-2 mt-2">
                </form>
 
                <?php
                if (isset($_POST['hitung'])) {
                    $harga = $_POST['harga'];
                    $diskon = $_POST['diskon'];
 
                    if ($harga < 0) {
                        echo "<script>alert(Harga tidak boleh kurang dari nol)</script>";
                    } elseif ($diskon < 0 || $diskon > 100) {
                        echo "<script>alert(Angka harus antara 0-100)</script>";
                    } else {
                        $nilai_diskon = $harga * ($diskon / 100);
                        $total_harga = $harga - $nilai_diskon; ?>
                        <div id="hasil" class="border rounded p-2 mt-2 text-light">
                            <p>Harga : <b>Rp.<?php echo number_format($harga, 2, ',', '.') ?></b></p>
                            <p>Diskon <?php echo $diskon ?>% : <b>Rp.<?php echo number_format($nilai_diskon, 2, ',', '.') ?></b></p>
                            <p>Harga Setelah Diskon : <b>Rp.<?php echo number_format($total_harga, 2, ',', '.') ?></b></p>
                            <button type="reset" id="hapus" onclick="hapus()" class="btn btn-danger w-100 p-2">Hapus</button>
                        </div>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>
    <p class="text-center text-light">&copy; UKK RPL | Muhammad Naufal Radithya | XII RPL</p>
    <script>
        function hapus(){
            window.location.href = window.location.href;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
 
</html>