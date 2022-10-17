<?php

if(isset($_POST['hasil'])) {
  $bilangan_satu = $_POST['bilanganSatu'];
  $bilangan_dua = $_POST['bilanganDua'];

//fungsi penjumlahan bilangan 1 dengan bilangan 2.
  function penjumlahan($a, $b)
  {
      $result = $a + $b;
      return $result;
  };
//fungsi pengurangan bilangan 1 dengan bilangan 2.
  function pengurangan($a, $b)
  {
      $result = $a - $b;
      return $result;
  };
//fungsi perkalian bilangan 1 dengan bilangan 2.
  function perkalian($a, $b)
  {
      $result = $a * $b;
      return $result;
  };
//fungsi pembagian bilangan 1 dengan bilangan 2.
  function pembagian($a, $b)
  {
      $result = $a / $b;
      return round($result, 2);
  };
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" id="id6y" data-redirect="" class="form">
  <div id="imqd2" class="gpd-text">Kalkulator sederhana
  </div>
  <div id="iw9j" class="form-group">
    <label id="ihn3k" class="label">Bilangan 1<br></label>
    <input type="number" placeholder="Masukan bilangan 1" name="bilanganSatu" id="iqnhk" class="input"/>
  </div>
  <div id="i46w1" class="form-group">
    <label id="i2t8l" class="label">Bilangan 2<br></label>
    <input type="number" placeholder="Masukan bilangan 2" name="bilanganDua" id="i13jw" class="input"/>
  </div>
  <div id="i7okr" class="form-group">
    <button type="submit" id="i8i69" class="button" value="hasil" name="hasil">Hasil</button> 
  </div>
  <?php
  echo "bilangan 1 :". $bilangan_satu;
  echo "<br>";
  echo "bilangan 2 :". $bilangan_dua;
  echo "<br>";
  echo "<hr><hr>";
  
  // jika bilangan merupakan angka maka tampilkan hasilnya
  if($bilangan_satu != null && $bilangan_dua != null){
    //Variable untuk menampung fungsi lalu menampilkannya
    $penjumlahan = penjumlahan($bilangan_satu, $bilangan_dua);
    echo "Hasil penjumlahan adalah : " .$penjumlahan ."<br>";
    $pengurangan = pengurangan($bilangan_satu, $bilangan_dua);
    echo "Hasil pengurangan adalah : ". $pengurangan ."<br>";
        
    $perkalian = perkalian($bilangan_satu, $bilangan_dua);
    echo "Hasil perkalian adalah : ". $perkalian ."<br>";
        
    $pembagian = pembagian($bilangan_satu, $bilangan_dua);
    echo "Hasil pembagian adalah : " .$pembagian; 
    }
  ?>
</form>
</body>
</html>