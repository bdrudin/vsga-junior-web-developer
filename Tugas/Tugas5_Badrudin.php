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
    <title>Kalkulator Sederhana</title>
</head>
<body>
    
<form method="post">
        <label for="bilangan1">Bilangan 1</label>
        <input type="number" name="bilanganSatu" placeholder="Masukan Bilangan 1">
        <br><br>
        <label for="bilangan2">Bilangan 2</label>
        <input type="number" name="bilanganDua" placeholder="Masukan Bilangan 2">
        <br><br>
        <input type="submit" value="hasil" name="hasil">
        <br><br>
    </form>
    <!-- PHP -->
    <?php
    echo "bilangan 1 :". $bilangan_satu;
    echo "<br>";
    echo "bilangan 2 :". $bilangan_dua;
    echo "<br>";
    echo "<hr><hr>";
    
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
</body>
</html>