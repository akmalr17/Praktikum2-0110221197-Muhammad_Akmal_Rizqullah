<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h3 class="m-3">Form Nilai Siswa</h3>
    <hr>
    <div class="m-5 border border-info p-3 rounded">
        <form action="form_nilai.php" method="GET" autocomplete="off">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
            <div class="col-8">
            <select id="matkul" name="matkul" class="custom-select">
                <option value="ddp">Dasar Dasar Pemrograman</option>
                <option value="pw">Pemrograman Web</option>
                <option value="jarkom">Jaringan Komputer</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <input id="uts" name="uts" placeholder="Nilai UTS" type="number" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <input id="uas" name="uas" placeholder="Nilai UAS" type="number" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
            <div class="col-8">
            <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="number" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
        </form>
    </div>

    <div class="m-5 border border-info p-3 rounded">
        <?php
            if(isset($_GET['submit'])){
                $nama = $_GET['nama'];
                $matkul = $_GET['matkul'];
                $uts = $_GET['uts'];
                $uas = $_GET['uas'];
                $tugas = $_GET['tugas'];
                $nilai_akhir = ($uts + $uas + $tugas) / 3;

                /*if($matkul == 'ddp'){
                    $kuliah = 'Dasar Dasar Pemrograman';
                }elseif($matkul == 'pw'){
                    $kuliah = 'Pemrograman Web';
                }elseif($matkul == 'jarkom'){
                    $kuliah = 'Jaringan Komputer';
                }*/

                switch($matkul){
                    case "ddp" : $kuliah = "Dasar Dasar Pemrograman"; break;
                    case "pw" : $kuliah = "Pemrograman Web"; break;
                    case "jarkom" : $kuliah = "Jaringan Komputer"; break;
                    default: "";
                }

                echo "Nama Lengkap : $nama <br>";
                echo "Mata Kuliah : $kuliah <br>";
                echo "Nilai UTS : $uts <br>";
                echo "Nilai UAS : $uas <br>";
                echo "Nilai Tugas : $tugas <br>";
                echo "Nilai Akhir : $nilai_akhir <br>";
            }
        ?>
    </div>
</body>
</html>