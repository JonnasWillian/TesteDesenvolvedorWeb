<!DOCTYPE html>
<html>
<body>

<?php
$inteiro01 = 33;
$resultado;
function operacao() {
   global $inteiro01, $resultado;
    $inteiro02 = 11;
    $resultado = $inteiro01 + $inteiro02;
}
operacao();
echo "o resultado da soma é: $resultado";
?>


</body>
</html>
