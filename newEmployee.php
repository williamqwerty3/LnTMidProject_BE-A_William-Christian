<?php
    include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container {
            margin: 10rem;
        }
    </style>
    <script>
        function val(){
            let nama = document.getElementById('nama').value;
            let umur = document.getElementById('umur').value;
            let alamat = document.getElementById('alamat').value;
            let telepon = document.getElementById('telepon').value;
            if(nama.length < 5 || name.length > 20){
                alert('Nama tidak boleh kurang dari 5 karakter dan lebih dari 20 karakter');
                return false;
            }
            if(umur < 20){
                alert('Umur harus diatas 20');
                return false;
            }
            if(alamat.length < 10 || alamat.length > 40){
                alert('Alamat tidak boleh kurang dari 10 dan lebih dari 40');
                return false;
            }
            if(!(telepon[0] == '0' && telepon[1] == '8')){
                alert('harus dimulai dengan 08');
                return false;
            }
        }
    </script>
</head>
<body>
    <div id="container">
        <div id="inside">
            <div>
                <form method="POST" onsubmit="return val()">
                    <div>
                        <label for="nama">Nama :   </label>
                        <input type="text" name="nama" id="nama" class="box">
                    </div>
                    <br>
                    <div>
                        <label for="umur">Umur : </label>
                        <input type="number" name="umur" id="umur" class="box">
                    </div>
                    <br>
                    <div>
                        <label for="alamat">Alamat : </label>
                        <input type="text" name="alamat" id="alamat">
                    </div>
                    <br>
                    <div>
                        <label for="telepon">Nomor Telepon : </label>
                        <input type="text" id="telepon" name="telepon">
                    </div>
                    <div>
                        <button type="submit" name="add">add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php
        include "connnection.php";
        if(isset($_POST['add'])){
            $nama = $_POST['nama'];
            $umur = $_POST['umur'];
            $alamat = $_POST['alamat'];
            $telepon = $_POST['telepon'];
            $insertToData = "INSERT INTO `Karyawan` (`id`, `Nama`, `Umur`, `Alamat`, `Telepon`) VALUES (NULL, '$nama', '$umur', '$alamat', '$telepon');";
            $connection->query($insertToData);
            echo "<script>alert('added');</script>";
        }
    ?>
</body>
</html>
