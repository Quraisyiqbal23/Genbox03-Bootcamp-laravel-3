<!DOCTYPE html>
<html>
<head>
  <title>table bio data</title>
  
</head>
<body>
  <?php
  $datas = [
    ["nama"=>"risa","umur" => 17, "hobi"=>"menonton","pria" => true],
    ["nama"=>"nurul","umur" => 18, "hobi"=>"masak","pria" => false],
   ["nama"=>"ali","umur" => 25, "hobi"=>"makan","pria" => true],
   
  ];
  ?>

  <table border="1" cellpadding="10" cellspacing="0">
    <thead>
      <tr>
        
        <th>Name</th>
        <th>Age</th>
        <th>Hobby</th>
        <th>Jenis kelamin</th>
        
      </tr>
    </thead>
    <tbody>
        
      <?php 
      
        foreach ($datas as $data): ?>
        <tr>
        
          <td><?php echo $data["nama"]; ?></td>
          <td><?php echo $data["umur"]; ?></td>
          <td><?php echo $data["hobi"]; ?></td>
          <!-- cek kondisi gender di row ke 4 -->
          <td>
             <?php
                 if ($data["pria"]) {
                 echo 'Male';
                 } else {
                  echo 'female'; }
                 ?>
            </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>


