<?php
$con = mysqli_connect("localhost", "root","", "lp1");
$sql = "CREATE TABLE Pessoa(Nome CHAR(30), Sobrenome CHAR(30), Idade INT)";
if (mysqli_query($con,$sql)){
  echo "Tabela criada com sucesso";
}else{
  echo "Error:" .mysqli_error($con);
}
  mysqli_close($con);
?>
