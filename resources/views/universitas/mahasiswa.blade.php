<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman View</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        
        <!-- <li>Suhendar Aryadi</li>
        <li>Cici Alifa</li>
        <li>Burhan</li>
        <li>Wiwi Marwiyah</li> -->

        <?php

            foreach ($mahasiswa as $nama) {
                echo "<li> $nama </li>";
            }
        
        ?>
        
    </ol>

    <!--  echo "$mahasiswa01"; ?> -->

    <!-- <ul>
    <li>Nama: < echo $nama; ?></li>
    <li>Umur: < $umur; ?> </li>
    <li>Kota Asal: < echo $kotaAsal; ?></li> -->
    
    
    </ul>
    
    <p>
    <div>
        Copyright <?php echo date("M-Y"); ?>. Suhendar Aryadi
    </div>
</body>
</html>