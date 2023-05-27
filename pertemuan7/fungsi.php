<?php 
$data = ["risa", 17,"nonton", true];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="0">
       <tr>
         <th>No</th>
        <th>nama</th>
        <th>Hobi</th>
        <th>Jenis kelamin</th>
       </tr>
       <tr>
        <td>
            1
        </td>
        <tr>
        <?php for ($i =0; $i < count($data); $i++)  ?>
            <td> <?php echo $data [$i] ?> </td>
        } ?>
       </tr>
    </table>
</body>
</html>