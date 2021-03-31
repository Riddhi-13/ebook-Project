<?php include 'downloadlogic.php';?>

 <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 100000000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="download.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

