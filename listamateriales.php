<!DOCTYPE html>
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
    <center> <a href="index.html">SALIR</a></center><br>
    <!-- contenido pagina materiales -->
<div id="contenido">
    <div><h1>LISTA MATERIALES</h1><br>
      <?php
      $mysql=new mysqli("localhost","root","","base1");
      if ($mysql->connect_error)
        die("Problemas con la conexión a la base de datos");
    
      $registros=$mysql->query("select * from articulos") or
        die($mysql->error);
       
      echo '<table class="tablalistado">';
      echo '<tr><th>Código</th><th>Nombre</th><th>Descripción</th>
            <th>Ubicacion</th><th>Borrar</th><th>Modificar</th></tr>';
      while ($reg=$registros->fetch_array())
      {
        echo '<tr>';
        echo '<td>';
        echo $reg['codigo'];
        echo '</td>';      
        echo '<td>';
        echo $reg['nombre'];      
        echo '</td>';      
        echo '<td>';
        echo $reg['descripcion'];      
        echo '</td>';      
        echo '<td>';
        echo $reg['ubicacion'];      
        echo '</td>';
        echo '<td>';
        echo '<a href="bajaarticulo.php?codigo='.$reg['codigo'].'">Borrar?</a>';
        echo '</td>';
        echo '<td>';
        echo '<a href="modificacionarticulo1.php?codigo='.$reg['codigo'].'">Modificar?</a>';
        echo '</td>';      
        echo '</tr>';      
      }    
      echo '<tr><td colspan="6">';
      echo '<a href="altaarticulo1.php">Agrega un nuevo artículo?</a>';
      echo '</td></tr>';
      echo '<table>';    
      
      $mysql->close();
  
    ?>               
  
    </div><br><br><br><br><br><br><br><br><br><br>
   
</div>


<!-- pie de pagina -->
<footer><h3>© 2025. All rights reserved</h3></div></footer>
</body>
</html>

