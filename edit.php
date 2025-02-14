<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src='main.js'></script>
</head>

<body>
  <?php
  include "koneksi.php";
  $query_mysql = mysqli_query($host, "SELECT user.id_user, user.username, negara.is_deleted, negara.negara, negara.id_negara, kendaraan.nama_kendaraan, hotel.nama_hotel, hotel.id_hotel, hotel.check_in, hotel.check_out, kendaraan.id_kendaraan FROM user INNER JOIN negara on user.id_user = negara.id_user INNER JOIN kendaraan ON negara.id_kendaraan=kendaraan.id_kendaraan INNER JOIN hotel on negara.id_hotel = hotel.id_hotel;");
  $nomor = 1;
  while ($data = mysqli_fetch_array($query_mysql)) {
  ?>
    <form class="container-fluid" method="post" action="update.php">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="username" value="<?php echo $data['username'] ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputemail1" class="form-label">Negara</label>
        <input type="text" class="form-control" id="exampleInputemail1" name="negara" value="<?php echo $data['negara'] ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputemail1" class="form-label">Id Negara</label>
        <input type="text" class="form-control" id="exampleInputemail1" name="id_negara" value="<?php echo $data['id_negara'] ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputemail1" class="form-label">Hotel</label>
        <input type="text" class="form-control" id="exampleInputemail1" name="nama_hotel" value="<?php echo $data['nama_hotel'] ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputemail1" class="form-label">Check-IN</label>
        <input type="text" class="form-control" id="exampleInputemail1" name="check_in" value="<?php echo $data['check_in'] ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputemail1" class="form-label">Check-OUT</label>
        <input type="text" class="form-control" id="exampleInputemail1" name="check_out" value="<?php echo $data['check_out'] ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputemail1" class="form-label">Id Hotel</label>
        <input type="text" class="form-control" id="exampleInputemail1" name="id_hotel" value="<?php echo $data['id_hotel'] ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputemail1" class="form-label">Kendaraan</label>
        <input type="text" class="form-control" id="exampleInputemail1" name="nama_kendaraan" value="<?php echo $data['nama_kendaraan'] ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputemail1" class="form-label">Id Kendaraan</label>
        <input type="text" class="form-control" id="exampleInputemail1" name="id_kendaraan" value="<?php echo $data['id_kendaraan'] ?>">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  <?php   } ?>
</body>

</html>