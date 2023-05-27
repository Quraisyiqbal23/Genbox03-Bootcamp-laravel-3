<?php 

$host = "localhost";
$user = "root";
$pass = "";
$DB = "users";

$koneksi = mysqli_connect($host, $user, $pass, $DB);

if (!$koneksi) {
    echo "Error : " . mysqli_error($koneksi);
}

function get_DB(){
    global $koneksi, $hasil;
    $query = "SELECT * FROM users";
    $hasil = mysqli_query($koneksi, $query);
}

$query = "SELECT * FROM users";
$hasil = mysqli_query($koneksi, $query);

if ($_POST) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $hobi = mysqli_real_escape_string($koneksi, $_POST['hobi']);
    $umur = mysqli_real_escape_string($koneksi, $_POST['umur']);

    $query2 = "INSERT INTO users (nama, hobi, umur) VALUES ('$nama', '$hobi', '$umur')";

    $hasil2 = mysqli_query($koneksi, $query2);

    if ($hasil2) {
        echo "Berhasil";
        get_DB();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="nama" placeholder="Nama..."><br>
        <input type="text" name="hobi" placeholder="Hobi..."><br>
        <input type="number" name="umur" placeholder="Umur..."><br>
        <button>OK</button>
        <br>
    </form>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>Hobi</th>
            <th>Umur</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($hasil)) { ?>
            <tr>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['hobi'] ?></td>
                <td><?= $row['umur'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
