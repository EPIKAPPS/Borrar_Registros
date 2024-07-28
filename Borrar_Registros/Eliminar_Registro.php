<style>
    table {
        border-style: solid;
        border-color: black;
    }
    td {
        border-style: solid;
        border-color: black;
    }
</style>
<?php
$cod = $_GET['c_art'];
$sec = $_GET['seccion'];
$nom = $_GET['n_art'];
$pre = $_GET['precio'];
$fec = $_GET['fecha'];
$imp = $_GET['importado'];
$por = $_GET['p_orig'];


$conexion = mysqli_connect("localhost", "root", "", "pruebas");

if (mysqli_connect_errno()) {
    echo "Fallo en la conexion con la BBDD.";
    exit();
}

mysqli_select_db($conexion, "pruebas") or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion, "utf8");

$consulta = "DELETE FROM PRODUCTOS WHERE CÓDIGOARTÍCULO='$cod'";

$resultados = mysqli_query($conexion, $consulta);

if ($resultados == FALSE) {
    echo 'Error en la consulta';
} else {
   /* echo '<b>Registros eliminados ';
    
    echo mysqli_affected_rows($conexion) . "</b><br><br>";
    */
    if(mysqli_affected_rows($conexion)==0){
        echo 'No se puede eliminar. No se encuentran registros con ese criterio.';
    }else{
        echo 'Registros eliminados con codigo '. $cod . " = " . mysqli_affected_rows($conexion);
    }
}
?>