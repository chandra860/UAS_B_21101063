<?php
    // memanggil koneksi
    include "connection/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Makanan</title>
  <!-- memanggil css -->
  <?php
     include "page-header/header.php";
  ?>

</head>

<body style="height:1500px">
    <!-- memanggil menu navbar -->
    <?php
        include "page-navbar-top/nuvbar-top.php";
    ?>

    <!-- Memanggil Tabel uas -->
    <?php
        $AmbilData = mysqli_query($koneksiDB, "SELECT
            
            tb_pemesan.id_pemesan,
            tb_pemesan.nama_pemesan AS nama pemesan,
            tb_pemesan.no_hp,

            tb_makanan.id_makanan,
            tb_makanan.nama_makanan,
            tb_makanan.harga AS harga makanan,

            tb_minuman.id_minuman,
            tb_minuman.nama_minuman,
            tb_minuman.harga AS harga minuman,

            tb_pesanan.kode_pesanan,
            tb_pesanan.id_pemesan,
            tb_pesanan.id_makanan,
            tb_pesanan.id_minuman,
            tb_pesanan.waktu_pesanan

            FROM tb_pesanan
            INNER JOIN tb_pemesan ON tb_pesanan.id_pemesan = tb_pemesan.id_pemesan
            INNER JOIN tb_makanan ON tb_pesanan.id_makanan = tb_makanan.id_makanan
            INNER JOIN tb_minuman ON tb_pesanan.id_minuman = tb_minuman.id_minuman
        
        ")
    ?>
    <div class="container"><
       <div class="mt-4 p-5 bg-primary text-white rounded">
       <h1>DAFTAR LIST MAKANAN</h1>
       <p>pesanan makanan tamu</p>
    </div>
</div>


<div class="container" style="margin-top:80px">
  <h3>List Daftar Makanan</h3>
</div>
<!-- Data Table -->
<div class="container">

  <table id="example" class="display" style="width:100%">
          <thead>
              <tr>
                  <th>kode pesan</th>
                  <th>nama pemesan</th>
                  <th>nama makanan</th>
                  <th>harga makanan</th>
                  <th>nama minuman</th>
                  <th>harga minuman</th>
                  <th>waktu pesan</th>
              </tr>
          </thead>
          <tbody>

            <?php
                while($tampilkandata = mysqli_fetch_array($AmbilData, MYSQLI_ASSOC)){

            ?>
              <tr>
                  <td><?php echo $tampilkandata['kode pesan'];?></td>
                  <td><?php echo $tampilkandata['nama pemesan'];?></td>
                  <td><?php echo $tampilkandata['nama makanan'];?></td>
                  <td><?php echo $tampilkandata['harga makanan'];?></td>
                  <td><?php echo $tampilkandata['nama minuman'];?></td>
                  <td><?php echo $tampilkandata['harga minuman'];?></td>
                  <td><?php echo $tampilkandata['waktu pesan'];?></td>
              </tr>
                <?php
                }
                ?>
          </tbody>
          <tfoot>
              <tr>
              <th>kode pesan</th>
                  <th>nama pemesan</th>
                  <th>nama makanan</th>
                  <th>harga makanan</th>
                  <th>nama minuman</th>
                  <th>harga minuman</th>
                  <th>waktu pesan</th>
              </tr>
          </tfoot>
      </table>

</div>

    <!-- navbar bottom -->
    <?php
        include "page-navbar-bottom/navbar-bottom.php";
    ?>

</body>
</html>

    <!-- javascript memanggil -->
    <?php
        include "page-footer/javascript.php"
    ?>