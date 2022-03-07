<!DOCTYPE html>

<html lang='en'>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Form Nilai Mahasiswa</title>
        <style>
            body{
                margin-top: 50px;
                margin-right: 50px;
                margin-left: 50px;
                color: #004d4d;
                background: #e6f2ff;
            }
            form{
                margin-right: 200px;
                margin-left: 200px;
            }
            .form2{
                margin-right: 50px;
                margin-left: 50px;
            }
            h3{
                text-align: center;
                color: #004d4d;
            }
        </style>
    </head>

    <body>
        <h3>FORM NILAI MAHASISWA</h3>
        <hr/><br/>
        <form action="form_nilai_predikat.php" method="GET">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label"><b>Nama Lengkap</b></label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div> -->
                    </div> 
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label"><b>Mata Kuliah</b></label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="">Pilih Mata Kuliah</option>
                    <option value="DDP">Dasar-Dasar Pemrograman</option>
                    <option value="BD 1">Basis Data I</option>
                    <option value="PEMWEB">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label"><b>Nilai UTS</b></label> 
                <div class="col-8">
                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label"><b>Nilai UAS</b></label> 
                <div class="col-8">
                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label"><b>Nilai Tugas/Praktikum</b></label> 
                <div class="col-8">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <br/><hr/><hr/>

        <?php
            $_nama = isset ($_GET['nama']) ? $_GET['nama'] : '';
            $_matkul = isset ($_GET['matkul']) ? $_GET['matkul'] : '';
            $_nilai_uts = isset ($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '';
            $_nilai_uas = isset ($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '';
            $_nilai_tugas = isset ($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '';
            
            //Perhitungan Nilai UTS (Predikat)

            switch($_nilai_uts){
                case 'A':
                    $info = "Sangat Memuaskan";
                    break;
                case 'B':
                    $info = "Memuaskan";
                    break;
                case 'C':
                    $info = "Cukup";
                    break;
                case 'D':
                    $info = "Kurang";
                    break;
                case 'E':
                    $info = "Sangat Kurang";
                    break;
                default:
                    $info = "Tidak Ada";
                    break;
            }

            //Perhitungan Nilai UAS (Predikat)

            switch($_nilai_uas){
                case 'A':
                    $info_2 = "Sangat Memuaskan";
                    break;
                case 'B':
                    $info_2 = "Memuaskan";
                    break;
                case 'C':
                    $info_2 = "Cukup";
                    break;
                case 'D':
                    $info_2 = "Kurang";
                    break;
                case 'E':
                    $info_2 = "Sangat Kurang";
                    break;
                default:
                    $info_2 = "Tidak Ada";
                    break;
            }
            //Perhitungan Nilai Tugas/Praktikum (Predikat)

            switch($_nilai_tugas){
                case 'A':
                    $info_3 = "Sangat Memuaskan";
                    break;
                case 'B':
                    $info_3 = "Memuaskan";
                    break;
                case 'C':
                    $info_3 = "Cukup";
                    break;
                case 'D':
                    $info_3 = "Kurang";
                    break;
                case 'E':
                    $info_3= "Sangat Kurang";
                    break;
                default:
                    $info_3 = "Tidak Ada";
                    break;
            }
        ?>

        <form class="form2">
            <div class="form-group row">
                <div class="col-6"><div class="col-6">
                </div>
                    <?php
                        echo 'Nama : '. $_nama;
                        echo '<br/> Mata Kuliah : '. $_matkul;
                        echo '<br/> Nilai UTS : '. $info;
                        echo '<br/> Nilai UAS : '. $info_2;
                        echo '<br/> Nilai Tugas/Praktikum : '. $info_3;
                    ?><div class="col-6">
                </div>
                <div class="col-6">
                </div>
            </div>
        <br><hr/><br/>
        </form>
    </body>
</html>