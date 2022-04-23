<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Kalkulator BMI</title>

        <style>
            body{
                margin-top: 50px;
                margin-right: 50px;
                margin-left: 50px;
            }
            form{
                margin-right: 50px;
                margin-left: 50px;
            }
            th{
                text-align: center;
                background-color: #007256;
                color: white;
            }
            h3{
                text-align: center;
            }
            tbody{
                text-align: center;
            }
        </style>
    </head>

    <body>
        <h3>KALKULATOR BMI</h3>
        <hr/><br/>
        <form action = "#table" method = "POST">
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode Pasien</label> 
                <div class="col-8">
                <input id="kode" name="kode" placeholder="Masukkan Kode" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="pasien" class="col-4 col-form-label">Nama Pasien</label> 
                <div class="col-8">
                <input id="pasien" name="pasien" placeholder="Masukkan Nama Lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal" class="col-4 col-form-label">Tangal Periksa</label> 
                <div class="col-8">
                <input id="tanggal" name="tanggal" placeholder="dd-mm-yyyy" type="text" class="form-control" aria-describedby="tanggalHelpBlock"> 
                <span id="tanggalHelpBlock" class="form-text text-muted">Masukkan tanggal sesuai tanggal-bulan-tahun</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Gender</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
                    <label for="gender_0" class="custom-control-label">Pria</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
                    <label for="gender_1" class="custom-control-label">Wanita</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
                <div class="col-8">
                <input id="bb" name="bb" placeholder="Masukkan Berat Badan (kg)" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
                <div class="col-8">
                <input id="tb" name="tb" placeholder="Masukkan Tinggi Badan (m)" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-success">Count</button>
                </div>
            </div>
        </form>
    
        <?php
            require_once "class_bmi.php";
            require_once "class_pasien.php";

            $_kode = $_POST['kode'];
            $_nama = $_POST['pasien'];
            $_tanggal = $_POST['tanggal'];
            $_gender = $_POST['gender'];
            $_berat = $_POST['bb'];
            $_tinggi = $_POST['tb'];

            $status = new bmi($_berat, $_tinggi);
    
            $dp1 = ['no'=>1,'Tanggal_Periksa'=>'2022-01-10', 'Kode_Pasien' => 'P001','Nama_Pasien'=>'Ahmad','Gender'=> 'L','Berat'=>69.8, 'Tinggi'=>1.69, 'Nilai_BMI'=>24.7, 'Status_BMI'=>'Kelebihan Berat Badan'];
            $dp2 = ['no'=>2,'Tanggal_Periksa'=>'2022-01-10', 'Kode_Pasien' => 'P002','Nama_Pasien'=>'Rina','Gender'=> 'P','Berat'=>55.3, 'Tinggi'=>1.65, 'Nilai_BMI'=>20.3, 'Status_BMI'=>'Normal (Ideal)'];
            $dp3 = ['no'=>3,'Tanggal_Periksa'=>'2022-01-11', 'Kode_Pasien' => 'P003','Nama_Pasien'=>'Lutfi','Gender'=> 'L','Berat'=>45.2, 'Tinggi'=>1.71, 'Nilai_BMI'=>15.4, 'Status_BMI'=>'Kekurangan Berat Badan'];
            $dp4 = ['no'=>1,'Tanggal_Periksa'=> $_tanggal, 'Kode_Pasien' => $_kode,'Nama_Pasien'=>$_nama,'Gender'=> $_gender,'Berat'=>$_berat, 'Tinggi'=>$_tinggi, 'Nilai_BMI'=>$status->getnilaiBMI(), 'Status_BMI'=>$status->getstatusBMI()];
            $ar_data = [$dp1, $dp2, $dp3, $dp4];
        ?>

            <br/><hr/><br/>
            <h3>Data Pasien</h3>
                
            <table class="table table-bordered" id="table">
            <thead class="table-info">
                <tr>
                <th>No</th>
                <th>Kode Pasien</th>
                <th>Nama Pasien</th>
                <th>Tanggal Periksa</th>
                <th>Gender</th>
                <th>Berat (kg)</th>
                <th>Tinggi (m)</th>
                <th>Nilai BMI</th>
                <th>Status BMI</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $nomor = 1;
            foreach($ar_data as $data){
                echo '<tr>';
                echo '<td>'.$nomor.'</td>';
                echo '<td>'.$data['Tanggal_Periksa'].'</td>';
                echo '<td>'.$data['Kode_Pasien'].'</td>';
                echo '<td>'.$data['Nama_Pasien'].'</td>';
                echo '<td>'.$data['Gender'].'</td>';
                echo '<td>'.$data['Berat'].'</td>';
                echo '<td>'.$data['Tinggi'].'</td>';
                echo '<td>'.$data['Nilai_BMI'].'</td>';
                echo '<td>'.$data['Status_BMI'].'</td>';
                $nomor++;
            }
            ?>
        </tbody>

    </body>
</html>