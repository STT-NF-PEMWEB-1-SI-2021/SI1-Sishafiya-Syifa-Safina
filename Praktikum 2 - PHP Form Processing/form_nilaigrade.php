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
        <form action="form_nilai_grade.php" method="POST">
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
            $_nama = isset ($_POST['nama']) ? $_POST['nama'] : '';
            $_matkul = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
            $_nilai_uts = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
            $_nilai_uas = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
            $_nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';
            
            //Perhitungan Nilai UTS (Grade)

            if($_nilai_uts>=101){
                $_grade = "I";
            }elseif($_nilai_uts>=85){
                $_grade = "A";
            }elseif($_nilai_uts>=70){
                $_grade = "B";
            }elseif($_nilai_uts>=56){
                $_grade = "C";
            }elseif($_nilai_uts>=36){
                $_grade = "D";
            }elseif($_nilai_uts>=0){
                $_grade = "E";
            }elseif($_nilai_uts<=0){
                $_grade = "I";
            }

            //Perhitungan Nilai UAS (Grade)

            if($_nilai_uas>=101){
                $_grade_2 = "I";
            }elseif($_nilai_uas>=85){
                $_grade_2 = "A";
            }elseif($_nilai_uas>=70){
                $_grade_2 = "B";
            }elseif($_nilai_uas>=56){
                $_grade_2 = "C";
            }elseif($_nilai_uas>=36){
                $_grade_2 = "D";
            }elseif($_nilai_uas>=0){
                $_grade_2 = "E";
            }elseif($_nilai_uas<=0){
                $_grade_2 = "I";
            }

            //Perhitungan Nilai Tugas/Praktikum (Grade)

            if($_nilai_tugas>=101){
                $_grade_3 = "I";
            }elseif($_nilai_tugas>=85){
                $_grade_3 = "A";
            }elseif($_nilai_tugas>=70){
                $_grade_3 = "B";
            }elseif($_nilai_tugas>=56){
                $_grade_3 = "C";
            }elseif($_nilai_tugas>=36){
                $_grade_3 = "D";
            }elseif($_nilai_tugas>=0){
                $_grade_3 = "E";
            }elseif($_nilai_tugas<=0){
                $_grade_3 = "I";
            }
        ?>

        <form class="form2">
            <div class="form-group row">
                <div class="col-6"><div class="col-6">
                </div>
                    <?php
                        echo 'Nama : '. $_nama;
                        echo '<br/> Mata Kuliah : '. $_matkul;
                        echo '<br/> Nilai UTS : '. $_grade;
                        echo '<br/> Nilai UAS : '. $_grade_2;
                        echo '<br/> Nilai Tugas/Praktikum : '. $_grade_3;
                    ?><div class="col-6">
                </div>
                <div class="col-6">
                </div>
            </div>
        <br><hr/><br/>
        </form>
    </body>
</html>