<html>
 <head>
  <title>01</title>
 </head>
 <body>
 <form action="" method="get">
  Somatório de: <input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Calcular" />
 </form>
 <?php
  $numero = $_GET['number'];
  echo "O somatório de $numero é : ".somatorio($numero);

  function somatorio($numero){
   if($numero==1)
    return 1;
   else
    return $numero + somatorio($numero-1);
  }
 ?>
 </body>
</html>
