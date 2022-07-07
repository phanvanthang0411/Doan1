
<?php
$conn = mysqli_connect("localhost", "root", "root", "project1");
$rows = mysqli_query($conn, "SELECT * FROM room");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
  <title>Đồ án Nhóm 3</title>
</head>
<body>
<h3>Sơ đồ phòng </h3>
<?php
    $baseUrl = 'http://localhost:8888/menu.php';
    $requestUrl = $_SERVER['REQUEST_URI'];
    $url_components = parse_url($requestUrl);
    parse_str($url_components['query'], $params);
?>
<?php if(!empty($rows)) :?>
    <?php foreach ($rows as $item) : ?>
        <?php if($item['type_room'] == $params['type_room']) : ?>
          <img src="<?= $item['image_diagram']?>" alt="">
        <?php endif?>
    <?php endforeach?>
<?php endif?>
<a href="<?= $baseUrl?>">Quay lại trang chủ</a>
</body>
</html>