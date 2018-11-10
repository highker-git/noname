<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>表单处理</title>
</head>
<body>
<center>Submit</br>Success</center><br/>
<?php
$r=$_POST['rabbit'];
echo "Your submit time is ".date('Y-m-d H:i:s')."<br/>";
echo '<h2>'.$r.'个兔'.'<br/>';
$c=$_POST['chicken'];
echo $c.'只鸡'.'<br/>';
$s=$_POST['sa'];
echo $s.'个皮皮莎';
?>
</body>
</html>