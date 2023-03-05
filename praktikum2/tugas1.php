<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <!-- form -->
                <form method="POST" action="">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="customer" name="customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="radio" id="radio_0" type="checkbox" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="radio" id="radio_1" type="checkbox" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="radio" id="radio_2" type="checkbox" class="custom-control-input" value="mesincuci"> 
        <label for="radio_2" class="custom-control-label">Mesin cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

            </div>

            <div class="col-4">
                <!-- daftar harga -->
                <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                 <li class="list-group-item">TV : 4.200.000</li>
                 <li class="list-group-item">Kulkas : 3.100.000</li>
                 <li class="list-group-item">Mesin cuci : 3.800.000</li>
                 <li class="list-group-item active" aria-current="true">Harga dapat berubah setiap saat</li>

            </div>
        </div>
    </div>
    
    <hr>


    <?php if(isset($_POST['submit']) && isset($_POST['radio'])) : ?>

        Nama Customer : <?= $_POST['customer']  ?>
        <br>
        Produk Pilihan : <?= $_POST['radio']    ?>
        <br>
        Jumlah Beli : <?= $_POST['jumlah']      ?>

        <br>

        <?php
        if( $_POST['radio'] == "tv" && $_POST['jumlah'] >= 1 ){
            $harga = 4200000 * $_POST['jumlah'];
            echo 'TOTAL HARGA : ' . $harga;
        } elseif ( $_POST ['radio'] == "kulkas" && $_POST['jumlah'] >= 1 ){
            $harga = 3100000 * $_POST ['jumlah'];    
            echo 'TOTAL HARGA : ' . $harga;
        } elseif ( $_POST['radio'] == "mesincuci" && $_POST['jumlah'] >= 1 ){
            $harga = 3800000 * $_POST['jumlah'];
            echo 'TOTAL HARGA : ' . $harga;

        }
    
        ?>


    <?php endif ?>

</body>
</html>