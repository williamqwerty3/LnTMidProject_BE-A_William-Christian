<?php
    include "connnection.php";
    include "navbar.php";
    $query = "SELECT * FROM karyawan";
    $result = $connection->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #conta {
            margin: 2rem;
            margin-left: 5rem;
        }
    </style>
</head>
<body>
    <div id="conta">
        <h2>List Nama Karyawan</h2>
        <ul>
            <?php while($hasil = $result->fetch_assoc()):?>
                <br>
                <li>
                    Nama: <?php echo $hasil['Nama']; ?> <br>
                    Umur: <?php echo $hasil['Umur']; ?> <br>
                    Alamat : <?php echo $hasil['Alamat']; ?> <br> 
                    Telepon :<?php echo $hasil['Telepon']; ?> <br>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</body>
</html>
