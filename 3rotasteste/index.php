<?php
/* This will give an error. Note the output
 * above, which is before the header() call */

$i=2;

if($i==1){
    header('Location: http://www.example.com/');
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    INDEX
</body>
</html>
