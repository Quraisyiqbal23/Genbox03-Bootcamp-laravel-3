





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
        <a href ="index.php" class="btn btn-primary">
            kembali
        </a>
    </div>
    <form action="index.php" method="post">
        <div class="mb-3">
            <label for="nama" class="form label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">
        </div>
        <div class="mb-3">
            <label for="Judul" class="form label">Judul</label>
            <input type="text" name="nama" class="form-control" id="Judul" placeholder="Masukan Judul">
        </div>
        <div class="mb-3">
            <label for="tema" class="form label">Tema</label>
            <Select name="tema" class="form-control">
                <option value="sains" selected="selected">Sains</option>
                <option value="fiksi" selected="selected">Fiksi</option>
                <option value="Folklore" selected="selected">Folklore</option>
            </Select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form label">Email</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Email">
        </div>
       
        <div class="mb-3">
            <label for="nama" class="form label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukan Nama">
        </div>
    </div>
    </form>
   
  </tbody>
</table>
</body>
</html>