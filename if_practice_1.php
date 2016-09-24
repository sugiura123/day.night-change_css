<?php
// 24時間単位の現在時
date_default_timezone_set('Asia/Tokyo');

$hour = date('G');
// echo $hour;
print date("Y/m/d G:i:s");
//print date("年/月/日 H:i:s");

if ($hour >=6 && $hour <= 17 ) { $class_name = 'day';}
elseif ($hour >= 0 && $hour <= 5 && $hour >= 18 && $hour <= 24) { $class_name = 'night';}
//else{$class_name = 'night';}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title></title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body class = "<?php echo  $class_name; ?>">
  <h1 class = "<?php echo $class_name;?>">昼と夜でページの見た目が変わります。</h1>
</body>
</html>