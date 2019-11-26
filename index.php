<?php
    use \Tuto\CssForm;
    use \Tuto\Autoloader;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

require 'class/Autoloader.php';
Autoloader::register();

$form = new CssForm($_POST);

?>

<form action="" method="post">
<?php 
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();

?>


</form>
</body>
</html>



    