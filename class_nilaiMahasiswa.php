<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Nilai Ujian</title>
    </head>
    <body>
        <div class="container">
        <h1 class="text-center">Form Nilai Ujian</h1>
        <hr>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <form class="form-horizontal" method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="DDP">Dasar-dasar Pemrograman</option>
                    <option value="Pemweb">Pemrograman Web</option>
                    <option value="Basdat">Basis Data</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                <input id="nilai" name="nilai" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <hr>
        <?php
class NilaiMahasiswa {
    var $matkul;
    var $nilai;
    var $nim;

    function __construct($matkul,$nilai,$nim){
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }
    function grade() {
        if ($this->nilai >= 56){
            return 'Lulus';
        }else{
            return 'Tidak Lulus';
        }
    }
    function hasil(){
        if ($this->nilai <= 35) {
            return 'E';
        }elseif ($this->nilai <= 55){
            return 'D';
        }elseif ($this->nilai <= 69){
            return 'C' ;
        }elseif ($this->nilai <= 84){
            return 'B' ;
        }elseif ($this->nilai <= 100){
            return 'A' ;
        }
    }
}
?>

<?php
    $nim = $_POST['nim'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $data = new NilaiMahasiswa($matkul, $nilai, $nim);

    echo 'NIM : '.$data->nim;
    echo '<br/>Mata Kuliah : '.$data->matkul;
    echo '<br/>Nilai :'.$data->nilai;
    echo "<br/>Hasil : ".$data->hasil();
    echo "<br/>Grade : ". $data->grade();

?>

        </div>
        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </body>
</html>
