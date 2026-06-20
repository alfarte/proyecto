<?php
    $mysql=new mysqli("localhost","root","","base1");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");
  
    $mysql->query("insert into articulos(nombre,descripcion,ubicacion) values ('$_REQUEST[nombre]','$_REQUEST[descripcion]','$_REQUEST[ubicacion]')") or
      die($mysql->error);
      
    $mysql->close();

    header('Location:listamateriales.php');    
?>  