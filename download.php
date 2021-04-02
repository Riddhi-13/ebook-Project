<?php include 'downloadlogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>

    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['ISBN_no']; ?></td>
      <td><?php echo $file['pdf_name']; ?></td>
     
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="download.php?file_id=<?php echo $file['ISBN_no'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>
