<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Home</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <section>
    <h1 class="display-6"> WELCOME ABOARD</h1>
  </section>
  <section class="container">
    <a class="btn btn-primary" href="form_input.php" role="button">CREATE NEW</a>
    <a class="btn btn-primary" href="restore.php" role="button">RESTORE PAGE</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Negara</th>
          <th scope="col">Hotel</th>
          <th scope="col">Kendaraan</th>
          <th scope="col">Check-IN</th>
          <th scope="col">Check-OUT</th>
        </tr>
      </thead>
      <tbody>
        <!-- SELECT a.id_user, a.username, b.negara ,d.nama_kendaraan, c.nama_hotel, c.check_in, c.check_out FROM user A INNER JOIN negara b ON a.id_user = b.id_user INNER JOIN hotel c ON b.id_negara=c.id_negara INNER JOIN kendaraan d ON b.id_negara = d.id_negara  WHERE is_deleted=0 -->
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($host, "SELECT * FROM travelog WHERE is_deleted=0");
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
          <tr>
            <th scope="row"><?php echo $nomor++; ?></th>
            <td><?php echo $data['username'];  ?></td>
            <td><?php echo $data['negara'];  ?></td>
            <td><?php echo $data['nama_hotel']; ?></td>
            <td><?php echo $data['nama_kendaraan']; ?></td>
            <td><?php echo $data['check_in']; ?></td>
            <td><?php echo $data['check_out']; ?></td>
            <td>
              <div class="btn-group" role="group" aria-label="Basic outlined example">
                <a class="btn btn-primary" role="button" href="edit.php?id=<?php echo $data['id_user']; ?>">Edit</a>
                <a class="btn btn-primary" role="button" href="hapus.php id=<?php echo $nomor['id_user']; ?>">Hapus</a>
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </section>
</body>

</html>