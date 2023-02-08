
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
print("hello world");
echo "<h1>esse e o php</h1>";

$valor = "teste de variavel";
$valor2 = 2;
$valor3 = 3.2;

echo $valor . "<br/>";
echo $valor2 . "<br/>";
echo $valor3 . "<br/>";

echo gettype($valor) . "<br/>";
echo gettype($valor2) . "<br/>";
echo gettype($valor3) . "<br/>";

$mistos = ["estrutura", 0.2,1];

echo $mistos[0];

echo "<hr>";

var_dump($mistos);

?>

</body>
</html>