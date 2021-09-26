<!--Estructura general de html5-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" src="imagenes/homecenter.jpg"/>
    <title>Homecenter</title>
    <link rel="stylesheet" href="Estilos.css">
    <body bgcolor=#C7C1C0>
</head>
<body>
<font color="Blue" face="Comic Sans MS,arial">

<!--Encabeszado del formulario-->

<center><h1>Productos a Comprar</h1>

<h2>Homecenter</h2>

<!--Enlazar la imagen del logo de homecenter-->

<img src="imagenes/homecenter.jpg" title="Organización De Homecenter" width="200" height="120">

<!--Creacion del formulario con relacion al codigo .php-->

<form action="Codigo_PHP.php" method="post">

<!--Creacion cada cuadro de texto para que el usuario rellene la informacion-->

  <p>Nombre1: <input type="text" name="Nombre1" required=""/></p> <p>Precio1: <input type="text" name="Precio_Producto_N°_1" required=""/></p> <p>Marca1: <input type="text" name="Marca1" /></p> 
  <p>Nombre2: <input type="text" name="Nombre2" required=""/></p> <p>Precio2: <input type="text" name="Precio_Producto_N°_2" required=""/></p> <p>Marca2: <input type="text" name="Marca2" /></p>
  <p>Nombre3: <input type="text" name="Nombre3" required=""/></p> <p>Precio3: <input type="text" name="Precio_Producto_N°_3" required=""/></p> <p>Marca3: <input type="text" name="Marca3" /></p>

  <!--Crear un cuadro para escribir el codigo postal como contraseña-->

  <p>Codigo_Postal: <input type="password" name="Codigo_Postal" value="Codigo_Postal" /></p>

    <!--Crear un cuadro para determinar la hora local a la hora de realizar el formulario-->

  <p>Fecha: <input type="datetime-local" name="date" /></p>

  <!--Boton para cargar los archivos solicitados-->

  <p>Fotocopia del Documento de identidad: <input type="file" name="file" /></p>

    <!--Listado de cada uno de los paises-->

  <p>Elija Ciudad:<select  class="Pais">
   
    <option>Colombia</option>
    <option>Ecuador</option>
    <option>Chile</option>
    <option>EE.UU</option>
  </select>
  </p>

  <!--Creacion del boton para calcular el precio final de los productos que se van a comprar-->

  <p><input type="submit" name="Total a pagar" value="Precio Total" /></p>
</form>
</body>
</html>

