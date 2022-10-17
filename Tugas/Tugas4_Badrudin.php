<?php
if(isset($_POST['kirim'])) {
	$jumlah_bintang = $_POST['jumlahBintang'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah Bintang</title>
    <style>
        label{
            padding-right: 5px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <!-- Form -->
    <form method="post">
        <label for="jumlahBintang">Jumlah Bintang</label>
        <input type="text" name="jumlahBintang">
        <br><br>
        <input type="submit" value="kirim" name="kirim">
        <br><br>
    </form>
    <!-- PHP -->
    <?php
    for($a=$jumlah_bintang; $a>0; $a--){
        for($i=$jumlah_bintang; $i>=$a; $i--){
            echo  "<label>*</label>";
        }
        echo "<br>";
    }
    ?>

</body>
</html>