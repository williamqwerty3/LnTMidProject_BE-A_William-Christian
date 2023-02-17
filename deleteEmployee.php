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
</head>
<body>
    <br>
    <br>
    <h1>masukan nama karyawan yang ingin di delete</h1>
    <form method="POST">
        <br>
        <label for="nama">Nama Karyawan : </label>
        <input type="text" name="nama" id="nama">
        <button type="submit" name="delete">Delete</button>
    </form>
</body>
</html>

<?php
    include "connnection.php";
    if(isset($_POST['delete'])){
        $nama = $_POST['nama'];
        $query = "select * from Karyawan where nama = '$nama'";
        $result = $connection->query($query);
        if($result->num_rows == 1){
            $q = "DELETE FROM Karyawan WHERE `Karyawan`.`nama` = '$nama'";
            $connection->query($q);
            echo "<script>alert('deleted!')</script>";
        }
    }


?>
