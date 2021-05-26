5)	<!DOCTYPE html>
<html>
<body>

<?php
$array = array(
    0 =>"gol",
    1 =>"corolla",
    2 =>"bmw",
    3=>"fusca",
    4=>"volkswagen",
);

$i=2;

switch ($i) {
	case 0:
    echo $array[0];
    break;
    case 1:
    echo $array[1];
    break;
   case 2:
    echo $array[2];
    break;
    case 3:
    echo $array[3];
    break;
   case 4:
    echo $array[4];
    break;
    default:
        echo 'Escolha uma opçao valida';
        break;
}
?>

</body>
</html>
