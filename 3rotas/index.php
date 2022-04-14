<!DOCTYPE html>
<html lang="en">
<head>
  <title>TESTE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php $i=1;
   if($i == 1){    
       header('Location: https://www.google.com/');         
       exit;    
   } else {        
       include("paginas/home.php");
   }?>
</body>
</html>