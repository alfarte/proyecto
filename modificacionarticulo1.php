<!doctype html>
<html>
<head>
  <title>AESTORE</title>
  <meta charset="UTF-8">
  <link rel="StyleSheet" href="styles.css" type="text/css">
 </head>
    
<body><!-- listado de encabezado -->
    <header>                     
        <ul>
            <li><img src="aestore.png" alt="logo"> </li>
            <li><a href="index.html">Home</a></li>
            <li><a href="usuarios.html">Usuarios</a></li>
            <li><a href="proveedores.html">Proveedores</a></li>
            <li><a href="materiales.html">Materiales</a></li>
            <li><a href="contacto.html">Contacto</a></li>                                     
        </ul><br><br><br><br>     
    </header>
    <!-- contenido pagina materiales -->
<div id="contenido">
  
  <?php
    $mysql=new mysqli("localhost","root","","base1");
    if ($mysql->connect_error)
      die("Problemas con la conexión a la base de datos");
  
    $registro=$mysql->query("select * from articulos where codigo=$_REQUEST[codigo]") or
      die($mysql->error);
     
      if ($reg=$registro->fetch_array())
      {
    ?>
      <form method="post" action="modificacionarticulo2.php">
        Nombre del artículo:
        <input type="text" name="nombre" size="50" value="<?php echo $reg['nombre']; ?>">
        <br>
        Descripcion:
        <input type="text" name="descripcion" size="10" value="<?php echo $reg['descripcion']; ?>">      
        <br>      
        Ubicaccion:
        <input type="text" name="ubicacion" size="10" value="<?php echo $reg['ubicacion']; ?>">      
        <br>
        
        <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>">     
        <br> 
        <input type="submit" value="Confirmar">
      </form>
    <?php
      }      
      else
        echo 'No existe un artículo con dicho código';
      
      $mysql->close();
  
    ?>  
<!-- pie de pagina -->
<footer><h3>© 2025. All rights reserved</h3></div></footer>
</body>
</html>