<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $nama = $_GET['nama'];
  $tujuan = $_GET['tujuan'];
  $tiket = $_GET['tiket'];
  $hs = 5000;
  $hm = 8000;
  $hp = 15000;
  $kelas = $_GET['kelas'];
  $eksekutif = 2;

  echo "Nama : " . $nama;
  echo "<br>";
  echo "Tujuan : " . $tujuan;
  echo "<br>";
  echo "Kelas : " . $kelas;
  echo "<br>";

  if ($tujuan == "Sidoarjo") {
    if ($kelas == 'Eksekutif') {
      echo "Harga = ", $hs * $eksekutif;
      echo "<br>";
      echo "Harga dengan $tiket tiket = ", $hs * $tiket * $eksekutif;
    } else {
      echo "Harga = $hs";
      echo "<br>";
      echo "Harga dengan $tiket tiket = ", $hs * $tiket;
    }
  } elseif ($tujuan == "Malang") {
    if ($kelas == 'Eksekutif') {
      echo "Harga = ", $hm * $eksekutif;
      echo "<br>";
      echo "Harga dengan $tiket tiket = ", $hm * $tiket * $eksekutif;
    } else {
      echo "Harga = $hm";
      echo "<br>";
      echo "Harga dengan $tiket tiket = ", $hm * $tiket;
    }
  } elseif ($tujuan == "Pasuruan") {
    if ($kelas == 'Eksekutif') {
      echo "Harga = ", $hp * $eksekutif;
      echo "<br>";
      echo "Harga dengan $tiket tiket = ", $hp * $tiket * $eksekutif;
    } else {
      echo "Harga = $hp";
      echo "<br>";
      echo "Harga dengan $tiket tiket = ", $hp * $tiket;
    }
  }

  ?>
</body>

</html>