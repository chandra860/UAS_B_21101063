<?php
    // memanggil koneksi
    include "connection/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar User</title>
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

    <div class="container"><
       <div class="mt-4 p-5 bg-primary text-white rounded">
       <h1>DAFTAR LIST USER</h1>
       <p>Daftar User</p>
    </div>
</div>

<div class="container" style="margin-top:80px">
  <h3>List Daftar User</h3>
</div>

    <!-- Footer -->
    <?php
        include "page-navbar-bottom/navbar-bottom.php";
    ?>

</body>
</html>