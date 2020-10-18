<?php
    if ($_POST['opcion'] == 1){
        $colorText = $_POST['colorT'];
        $medidaTexto = $_POST['tamañoT'];
        $fuenteTexto = $_POST['letraT'];    
        setcookie("colorTexto", "$colorText" , time() + 84600);
        setcookie("tamañoTexto", "$medidaTexto" , time() + 84600);
        setcookie("letraTexto", "$fuenteTexto" , time() + 84600);
    }else{
        echo('No has guardado los datos en las cookies.');
    }

?>

<html>
<head>
    <style type="text/css">
        h1 {
        color: <?php echo $_POST['colorT']?> ;
        font-family: <?php echo $_POST['letraT'] ?> ;
        font-size: <?php echo $_POST['tamañoT'] ?> ;
        }
    </style>

</head>
<body>
    <h1>
        <?php
            echo $_POST['texto'];
        ?>
    </h1>

</body>
</html>

<?php


?>



<?php
    include "ej2.php";
?>
