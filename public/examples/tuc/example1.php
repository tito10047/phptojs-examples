<?php
$files = glob(__DIR__."/lib/*");
$files = array_merge($files,glob(__DIR__."/js/*"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>example 1</title>
    <script src="main.js"></script>
    <script src=""></script>
    <?foreach ($files as $file):?>
    <script src="<?=substr($file,strlen($file))?>"></script>
    <?endforeach;?>
</head>
<body>

</body>
</html>