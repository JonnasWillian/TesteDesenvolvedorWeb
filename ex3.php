<!DOCTYPE html>
<html>
<body>
<?php
$hora = new DateTime(); 
echo $hoje;

if ($hora > ("00:00") || $hora < ("12:00")){
echo "Bom dia";
} elseif ($hora > ("17:00") || $hora < ("00:01")){
echo "Boa noite";
}else {
echo "Boa tarde";
}

?>
</body>
</html>
