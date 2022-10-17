<?php
//Tampilkan string "Cetak Bilangan Ganjil Genap 1-100"
echo "==========CETAK BILANGAN GANJIL GENAP 1-100==========";
echo "<br>";    //menambahkan baris baru

// buat perulangan angka 1-100 **ex: dengan menggunakan while**
$angka = 1;
while($angka <= 100){
/*
    *note: Bilangan genap adalah suatu bilangan yang dapat habis dibagi dua, 
    sedangkan untuk bilangan ganjil itu sendiri adalah bilangan yang jika dibagi dua maka bersisa 1.*
*/
    if($angka%2 == 0){          // Gunakan operator modulus untuk mencari antara bilangan yang bernilai genap dan ganjil.
        echo $angka ." adalah Bilangan Genap". "<br>";       //jika habis dibagi 2, cetak $angka adalah Bilangan Genap
    } else{
        echo $angka ." adalah Bilangan Ganjil." ."<br>";     //jika tidak habis, maka cetak $angka adalah Bilangan Ganjil.
    }
    $angka++;
}
?>