<html>
<head>
<style>
* {
  font-family: Consolas,"courier new";
  color: crimson;
  background-color: #f1f1f1;
  padding: 2px;
  font-size: 105%;
}
</style>
</head>
<body>
<?php 
$character= "f";
$alphabet ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$output = strpos($alphabet, strtoupper($character)) + 1;
if ($output == strlen($alphabet)){
    echo "A";

}else{
    echo $alphabet[$output];
}

?>

</body>
</html>
