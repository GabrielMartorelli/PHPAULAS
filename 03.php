<html>
<head>
<title>Resultado</title>
</head>
<?php
    if(isset($_GET["num1"]))
    {   $x = $_GET["num1"];
        $y = $_GET["num2"];
        $op = $_GET["operacao"];

        if($op =="soma")
        {    $z = $x+$y;
            echo "$x + $y = $z";
        }
    }
?>
