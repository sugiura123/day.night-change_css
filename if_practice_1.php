<?php
// 24時間単位の現在時
//date_default_timezone_set(Asia/Tokyo);
//print date("Y/m/d G:i:s");
//echo date.('Y-m-d H:i:s');


date_default_timezone_set('Asia/Tokyo');

//print date("Y/m/d G:i:s");
$hour = date('G');
echo $hour;

?>

<!DOCTYPE html>
<html>
<head>
  <title>サンプルページ</title>
</head>
<body>
<?php
if ($hour >= 0 && $hour <= 5 ) {echo <a href = "yoru.html"></a>;}
elseif ($hour >= 6 && $hour <= 17 ) {echo <a href = "hiru.html"></a>;}
elseif ($hour >= 18 && $hour <= 24 ) {echo <a href = "yoru.html"></a>;}
else {echo 'やっほー';}
?>


</body>
</html>
