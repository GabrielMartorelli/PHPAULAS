<?php
$con = mysqli_connect("localhost", "root","", "lp1");
if (mysqli_connect_errno()){
  echo "Falha ao conectar com o MySql:" . mysqli_connect_error();
}
$sql1 = "INSERT INTO Pessoa Values('Ana', 'Souza', 20)";
mysqli_query($con,$sql1);
$sql2 = "INSERT INTO Pessoa(Nome, Sobrenome, Idade)
        Values('Carlos', 'Costa', 21)";
mysqli_query($con,$sql2);
mysqli_close($con);
 ?>
