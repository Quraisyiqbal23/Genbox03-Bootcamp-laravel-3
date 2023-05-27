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

   <?php 
        $no = 1;
        foreach ($datas as $data): ?>
        <tr>
       
          <td><?php echo $data[0]; ?></td>
          <td><?php echo "<br>"; ?></td>
          <td><?php echo $data[1]; ?></td>
          <td><?php echo "<br>"; ?></td>
          <td><?php echo $data[2]; ?></td>
          <td><?php echo "<br>"; ?></td>
          <td>
             <?php
                 if ($data[3]) {
                 echo 'Laki';
                 } else {
                  echo ''; }
                 ?>
            </td>
          <td><?php echo "<br>"; ?></td>
          <td><?php echo "<br>"; ?></td>
        </tr>
      <?php endforeach; ?>
