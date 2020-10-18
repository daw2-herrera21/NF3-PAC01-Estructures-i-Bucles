<?php
    include "contador_visitas.php";
?>

<?php

$dia_anterior=date("N")-1;
    if ($dia_anterior==0){
        echo "Yesterday it was Sunday. ";
    }
    if ($dia_anterior==1){
        echo "Yesterday it was Monday. ";
    }
    if ($dia_anterior==2){
        echo "Yesterday it was Tuesday. ";
    }
    if ($dia_anterior==3){
        echo "Yesterday it was Wednesday. ";
    }
    if ($dia_anterior==4){
        echo "Yesterday it was Thursday. ";
    }
    if ($dia_anterior==5){
        echo "Yesterday it was Friday. ";
    }
    if ($dia_anterior==6){
        echo "Yesterday it was Saturday. ";
    }

?>


<?php

$mes_anterior=date("m")-1;
    if ($mes_anterior==0){
        echo "The previous month is December.";
    }
    if ($mes_anterior==1){
        echo "The previous month is January.";
    }
    if ($mes_anterior==2){
        echo "The previous month is February.";
    }
    if ($mes_anterior==3){
        echo "The previous month is March.";
    }
    if ($mes_anterior==4){
        echo "The previous month is April.";
    }
    if ($mes_anterior==5){
        echo "The previous month is may.";
    }
    if ($mes_anterior==6){
        echo "The previous month is June.";
    }
    if ($mes_anterior==7){
        echo "The previous month is July.";
    }
    if ($mes_anterior==8){
        echo "The previous month is August.";
    }
    if ($mes_anterior==9){
        echo "The previous month is September.";
    }
    if ($mes_anterior==10){
        echo "The previous month is October.";
    }
    if ($mes_anterior==11){
        echo "The previous month is November.";
    }
?>

<?php

$dias_restantes1=date("t");
$dias_restantes2=date("d");
$dias_restantes3=$dias_restantes1-$dias_restantes2;
echo "There are ";
echo $dias_restantes3;
echo " days left in this month.";

?>

<?php

$meses_restantes1="12";
$meses_restantes2=date("m");
$meses_restantes3=$meses_restantes1-$meses_restantes2;
echo "There are ";
echo $meses_restantes3;
echo " months left in the current year.";

?>

<?php
    $mesActual = date('n');
    $primavera = array(3,4,5);
    $verano  = array(6,7,8);
    $otono = array(9,10,11);
 
    if ( in_array( $mesActual, $primavera ) ) {
        echo "Good spring!";
 
    } elseif ( in_array( $mesActual, $verano ) ) {
        echo "Good summer!";
 
    } elseif ( in_array( $mesActual, $otono ) ) {
        echo "Good autumn!";
 
    } else {
        echo "Good winter!";
 
    }


?>



<html>
  <head>
    <title>Directivas Variables</title>
  </head>
<body>
<form method="POST"action="ej4.php">
    <br>
    <br>
    <br>
    Introduce el texto: <input type="text" name="texto">
    <br>
    Dime el color del texto: <input type="text" placeholder="<?php echo $_COOKIE["colorTexto"];?>" name="colorT">
    <br>
    Dime el tamaño de la fuente: <input type="text" placeholder="<?php echo $_COOKIE["tamañoTexto"];?>" name="tamañoT">
    <br>
    Dime el tipo de letra: <input type="text" placeholder="<?php echo $_COOKIE["letraTexto"];?>" name="letraT">  
    <br>
    <p>Quieres guardar la información en una cookie?</p>
    <select name="opcion">
        <option value=1>Yes</option>
        <option value=2>No</option>
    </select>
    <br>
    <br>
    <br>
    <input type="submit" value="Probar">


</form>
</body>
</html>


<?php
    include "ej2.php";
?>
