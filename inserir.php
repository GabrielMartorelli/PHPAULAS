<?php
$con = mysqli_connect("localhost", "root","", "lp1");
if (mysqli_connect_errno()){
  echo "Erro:" . mysqli_connect_error();
}else{
  $sql = "INSERT INTO Pessoa
  Values('$_POST[nome]','$_POST[sobrenome]','$_POST[idade]',)";
  if (mysqli_query($con,$sql)){
    echo "Pessoa Inserida";
  }else{
    echo "Error:" . mysqli_error($con);
  }
  mysqli_close($con);
}
?>
































 ?>
