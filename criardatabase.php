<?php
$con = mysqli_connect("localhost", "root", "");
if (mysqli_connect_errno($con)){
  echo "Error ao conectar com a base de dados".
  mysqli_connect_error();
}else{
  $sql="CREATE DATABASE lp1";
  if (mysqli_query($con,$sql)){
    echo "Base de dados criada com sucesso";
  }else{
    echo "Erro:" .mysqli_error($con);
  }

mysqli_close($con);
}
 ?>
