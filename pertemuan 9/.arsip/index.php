<?php 
$index = 1;
$host = "localhost";
$user = "root";
$pass = "";
$DB = "latihan";

$koneksi = mysqli_connect($host,$user,$pass,$DB);

if(!$koneksi){
    echo "Error: ".mysqli_error($koneksi);
}else {
    echo "<!-- koneksi mysql success -->";
}

$hasil = mysqli_query($koneksi, "select* from buku");

If($_POST){
$nama = $_POST ['nama'];
$Judul = $_POST ['judul'];
$tema = $_POST ['tema'];
$emails = $_POST ['email'];
 
 $add = mysqli_query($koneksi, "insert into buku (nama,judul,tema,email)" values($nama,$judul,$tema,$em))
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
<!-- link Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!--FA  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container pt-4">
        <h1> Web book</h1>
        <p>wellcome to website</p>

        <br>
        <a href ="form.php" class="btn btn-primary">
            <i class="fa fa-book">

            </i>
            tambah buku
        </a>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Judul</th>
      <th scope="col">tema</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
        
        <a href ="#" class="btn btn-success d-inline-block mr-2"> <i class="fa solid fa-user-pen"></i></a>
        <a href ="#" class="btn btn-success d-inline-block mr-2"> <i class="fa solid fa-trash"></i></a>
      </td>
    </tr>
   
  </tbody>
</table>
</body>
</html>