<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "<table border=1>";
        echo"<tr>";
        echo"<td>Bilangan</td>";
        for($klm = 1; $klm <= 10; $klm++){
            echo "<td bgcolor='lime'>$klm</td>";
        }
        echo"<tr>";
        for($brs = 1; $brs <=10; $brs++){
            echo"<tr>";
            echo"<td bgcolor='lime'>$brs</td>";
            for($klm = 1; $klm <= 10; $klm++){
                $nilai = $brs * $klm;
                if($nilai % 2 !=0){
                    $w = "yellow";
                }else{
                    $w = "cyan";
                }
                echo"<td bgcolor='$w'>$nilai</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<a href = 'Pengulangan.php'>Kembali ke pengulangan genap</a>";
    ?>
</body>
</html>