<?php

require 'function.php';
$datas = query("SELECT * FROM pilot_posts");

if (isset($_GET['cari'])) {
  $datas = cari($_GET['keyword']);
};

?>

<?php echo "hello world"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Tags</th>
        <th>Deskripsi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($datas as $data) : ?>
        <tr>
          <td><?= $data['title']; ?></td>
          <td><?= $data['category']; ?></td>
          <td><?= $data['tag']; ?></td>
          <td><?= $data['deskripsi']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>