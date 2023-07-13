<?php
$db_host="localhost";
$db_usuario="root";
$db_password="";
$db_nombre="final";

$conecction=mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);





<?php


$email=$_POST['Email'];


$consulta="INSERT into usuario(email) values( '$email', )";

$resultado=mysqli_query($conecction, $consulta);

if ($resultado){
    echo "Registro exitoso";
} else {
    echo "Registro Fallido";
}
?>