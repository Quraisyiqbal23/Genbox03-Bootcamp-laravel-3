<!DOCTYPE html>
<html>
<head>
  <title>table bio data</title>
  
</head>
<body>
  <?php
  $datas = [
    ["risa", 17, "menonton", true],
    ["nurul", 18, "masak", false],
    ["ucup", 12, "bola", true],
    ["desy", 13, "Live", false],
    ["ariel", 21, "mancing", true],
    ["ali", 25, "makan", true],
    ["ica", 20, "melukis", false],
  ];
  ?>

  <table border="1" cellpadding="10" cellspacing="0">
    <thead>
      <tr>
        <th>NO</th>
        <th>Name</th>
        <th>Age</th>
        <th>Hobby</th>
        <th>Jenis kelamin</th>
        
      </tr>
    </thead>
    <tbody>
        
      <?php 
        $no = 1;
        foreach ($datas as $data): ?>
        <tr>
        <td><?php echo $no++; ?></td>
          <td><?php echo $data[0]; ?></td>
          <td><?php echo $data[1]; ?></td>
          <td><?php echo $data[2]; ?></td>
          <!-- cek kondisi gender di row ke 4 -->
          <td>
             <?php
                 if ($data[3]) {
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


