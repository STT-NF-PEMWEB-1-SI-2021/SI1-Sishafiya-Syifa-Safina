<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        form{
            padding: 40px 20px 50px 20px;
        }
        body{
            margin:10px;
        }
    </style>

    <title>From Belanja</title>
  </head>
  <body>
    
    
    <!-- Form -->
    <div>
        <div class="row">
            <div class="col-8">
                <!-- Navbar -->
                <nav class="navbar navbar-light bg-light">
                    <a class="navbar-brand" href="#">Belanja Online</a>
                </nav>

                <form method="POST" action="form_belanja.php">
                <div class="form-group row">
                    <label for="customer" class="col-3 col-form-label"><b>Customer</b></label> 
                    <div class="col-9">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3"><b>Pilih Produk</b></label> 
                    <div class="col-9">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-3 col-form-label"><b>Jumlah</b></label> 
                    <div class="col-9">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-3 col-9">
                    <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
                </form>
            </div>

            <div class="col-4">
                <table class="table table-lg">
                    <thead>
                        <tr class="table-primary">
                        <th>Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-light">
                        <td>TV : 4.200.000</td>
                        </tr>

                        <tr class="table-light">
                        <td>Kulkas : 3.100.000</td>
                        </tr>

                        <tr class="table-light">
                        <td>Mesin Cuci : 3.800.000</td>
                        </tr>

                        <tr class="table-primary">
                        <th>Harga Dapat Berubah Setiap Saat</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <hr>

    <!-- PHP Session -->
    <?php

        $_customer = $_POST["customer"];
        $_produk = $_POST["produk"];
        $_jumlah = $_POST["jumlah"];

        if ($_produk == "TV") {
            $harga = 4200000;
        }elseif($_produk == "Kulkas"){
            $harga = 3100000;
        }elseif ($_produk == "Mesin Cuci") {
            $harga = 3800000;
        }

        echo "Nama Customer : " . $_customer;
        echo "<br/> Produk Pilihan : " . $_produk;
        echo "<br/> Jumlah Beli : " . $_jumlah;
        echo "<br/> Total Belanja : " . ($harga * $_jumlah);

    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>