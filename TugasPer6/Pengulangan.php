<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Pengulangan 1 sampai 10 menampilkan angka yang bernilai genap(GENAP)<br><br>";
    for($i = 1; $i <= 10; $i++){
        if($i % 2 == 0){
            echo "$i <br>";
        }
    }

    echo "<a href ='PerkalianMatrik.php'>Ke tabel perkalian matriks</a>";
    ?>

    
</body>
</html>