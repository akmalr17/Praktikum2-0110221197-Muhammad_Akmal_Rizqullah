<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Belanja Online</title>
</head>
<body>
    <h3 class="m-3">
        Belanja Online
    </h3>
    <hr>
    <div class="d-flex mb-5">
        <div class="mt-5 ml-5 mr-4 border border-info p-3 rounded col-9">
        <form method="POST" action="form_belanja.php" autocomplete="off">
            <div class="form-group row">
                <label class="col-4 col-form-label" for="costumer">Costumer</label> 
                <div class="col-8">
                <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin"> 
                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-dark">Kirim</button>
                </div>
            </div>
    </form>
    </div>
    <div>
        <ul class="list-group mt-5">
            <li class="list-group-item active" aria-current="true">Daftar Harga</li>
            <li class="list-group-item">TV : 4.200.000</li>
            <li class="list-group-item">Kulkas : 3.100.000</li>
            <li class="list-group-item">Mesin Cuci : 3.800.000</li>
            <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
        </ul>
    </div>
    </div>
    <hr>
    <div class="m-5 border border-info p-3 rounded">
    <?php
        if(isset($_POST['proses'])){
            $nama = $_POST['costumer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];
            
            switch($produk){
                case "tv" : $barang = "TV"; break;
                case "kulkas" : $barang = "Kulkas"; break;
                case "mesin" : $barang = "Mesin Cuci"; break;
                default: "";
            }

            if($produk == 'tv'){
                $total = ($jumlah * 4200000);
            }elseif($produk == 'kulkas'){
                $total = ($jumlah * 3100000);
            }elseif($produk == 'mesin'){
                $total = ($jumlah * 3800000);
            }

            echo "Nama Costumer : $nama <br>";
            echo "Produk Pilihan : $barang <br>";
            echo "Jumlah Beli : $jumlah <br>";
            echo "Total Belanja : Rp. $total <br>";
        }
    ?>
    </div>
</body>
</html>