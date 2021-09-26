<html>
<body>
<body bgcolor=#C7C1C0>
<center>
<!--Tipo de letra y color-->
<font color="Blue" face="Comic Sans MS,arial">
  <?php

  echo "<h1>Bienvenido al gestor de compras de la organizacion de Homecenter</h1>.\n";
  ?>
</font>
<!--Tipo de letra y color-->
<font face="Comic Sans MS,arial">
<?php

  // se asigna las variables para la informacion general de la compra

  $Nombre = "Cristian Camilo Toro Gómez";
  echo ("El nombre del funcionario principal a cargo de 
administrar su compra es: $Nombre.\n");
  
?>

  <?php
  // se asigna la variable de la organizacion donde se realizó la compra
  $Organizacion = "Homecenter";
  echo ("El nombre de la organizacion es: $Organizacion.\n");
  ?>


  <?php
  // se asigna la variable del año en que se realizo la compra
  $Año = 2021;

  echo ("El año en el que realizo su compra es: $Año.\n");
  ?>

  <?php

  // se solicita el nombre del precio Numero 1
  $Nombre1 = $_POST["Nombre1"];

  // se solicita el nombre del precio Numero 2
  $Nombre2 = $_POST["Nombre2"];

  // se solicita el nombre del precio Numero 3
  $Nombre3 = $_POST["Nombre3"];


  // se llama el precio del producto numero 1
  $precio1 = $_POST["Precio_Producto_N°_1"];


  // llama el precio del producto numero 2
  $precio2 = $_POST["Precio_Producto_N°_2"];


  // llama el precio del producto numero 3
  $precio3 = $_POST["Precio_Producto_N°_3"];

  // se llama el precio del producto numero 1
  $marca1 = $_POST["Marca1"];


  // llama el precio del producto numero 2
  $marca2 = $_POST["Marca2"];

  // llama el precio del producto numero 3
  $marca3 = $_POST["Marca3"];

  // Asignamos la variable "suma"
  $Suma = $precio1 + $precio2 + $precio3;

  // Asignamos la variable "dolar" lo que cuesta el dolar frente al peso

  $Dolar = 0.00026;

  // Operacion para realizar la conversion

  $TotalDolar = $Suma * $Dolar;

  // Asignamos la variable "euro" lo que cuesta el euro frente al peso

  $Euro = 0.00022;

  $TotalEuro = $Suma * $Euro;

  // Asignamos la variable "Libra esterlina" lo que cuesta el euro frente al peso

  $libra = 0.00019;

  $Totallibra = $Suma * $libra;

  // Ejecutamos todo el codigo para calcular el total

  echo "El total en pesos colombianos de su compra realizada es de: <h3>$$Suma</h3>\n";

  // Ejecutamos todo el codigo para calcular el total en dolares

  echo "El total en dolares es de: <h3>$$TotalDolar</h3>\n";

  // Ejecutamos todo el codigo para calcular el total en euros

  echo "El total en euros es de: <h3>€$TotalEuro</h3>\n";

  // Ejecutamos todo el codigo para calcular el total en libras esterlinas

  echo "El total en libras esterlinas es de: <h3>£$Totallibra</h3>\n";
  ?>

  <?php

  // Codigo_Postal

  $Codigo = $_POST["Codigo_Postal"];

  echo "El codigo postal es de: <h3>$Codigo </h3>\n";

  // Determinamos el descuento para cada moneda

     // Determinar Condición para el descuento en caso de ser $Suma(Que es el total) > 500000

  if ($Suma <= 500000) {

  echo '<h1>El Descuento del producto será del 5%</h1>';

  $Descuento1 = $Suma * 0.95;
  $Descuento2 = $TotalDolar * 0.95;
  $Descuento3 = $TotalEuro * 0.95;
  $Descuento4 = $Totallibra * 0.95;

  // Ejecutamos el precio con descuento en pesos colombianos del 5%
  echo "Su total a pagar en pesos colombianoscon descuento es de: <h3>$$Descuento1</h3>\n";

  // El total con descuento en dolares del 5%

  echo "El total con el descuento en dolares es de: <h3>$$Descuento2</h3>\n";

  // El total con descuento en euros del 5%

  echo "El total con el descuento en euros es de: <h3>€$Descuento3</h3>\n";

  // El total con descuento en libras esterlinas del 5%

  echo "El total con el descuento en libras esterlinas es de: <h3>£$Descuento4</h3>\n";

}

   // Determinar Condición para el descuento en caso de ser $Suma(Que es el total) > 100000
   elseif ($Suma > 500000 && $Suma <= 699999){

    echo '<h1>El Descuento del producto será del 20%</h1>';

    // si la el total es mayor a 10000 implementar un descuento del 20% en pesos colombianos
    
      $Rebaja1= $Suma*0.80;
        echo "El total de su compra tiene el 20% de descuento en pesos colombianos es:<h3>$$Rebaja1</h3>";
      
      // si la el total es mayor a 10000 implementar un descuento del 20% en dolaes
        
      $Rebaja2 = $TotalDolar * 0.80;

      echo "El total de su compra tiene el 20% de descuento en dolaes es:<h3>$$Rebaja2</h3>";

      // si la el total es mayor a 10000 implementar un descuento del 5% en euros
        
      $Rebaja3 = $TotalEuro * 0.80;

      echo "El total de su compra tiene el 20% de descuento en euros es:<h3>€$Rebaja3</h3>";

      // si la el total es mayor a 10000 implementar un descuento del 5% en Libras esterlinas
        
      $Rebaja4 = $Totallibra * 0.80;

      echo "El total de su compra tiene el 20% de descuento en libras esterlinas es:<h3>£$Rebaja4</h3>";
          }

        if ($Suma > 700000) {
          echo '<h1>El Descuento del producto será del 40%</h1>';


          // si la el total es mayor a 10000 implementar un descuento del 40% en pesos colombianos
          
            $Rebaja5= $Suma*0.60;
              echo "El total de su compra tiene el 40% de descuento en pesos colombianos es:<h3>$$Rebaja5</h3>";
            
            // si la el total es mayor a 10000 implementar un descuento del 40% en dolaes
              
            $Rebaja6= $TotalDolar * 0.60;
      
            echo "El total de su compra tiene el 40% de descuento en dolaes es:<h3>$$Rebaja6</h3>";
      
            // si la el total es mayor a 10000 implementar un descuento del 40% en euros
              
            $Rebaja7= $TotalEuro * 0.60;
      
            echo "El total de su compra tiene el 40% de descuento en euros es:<h3>€$Rebaja7</h3>";
      
            // si la el total es mayor a 10000 implementar un descuento del 40% en Libras esterlinas
              
            $Rebaja8= $Totallibra * 0.60;
      
            echo "El total de su compra tiene el 40% de descuento en libras esterlinas es:<h3>£$Rebaja8</h3>";

        }

  // Creamos una variable para el número de registro

  $NRegistro = 15535;

  // Ejecutamos la varaible

  echo "El número de registro es: <h3>#$NRegistro</h3>\n ";


  $Pais = "Colombia";
  $Pais2 = "Ecuador";
  $Pais3 = "Chile";
  $Pais4 = "EE.UU";

  echo "El pais en donde se encuentra la sede es:<h3>$Pais</h3>";


  // Creamos una variable para determianr la ciudad en donde se encuentra la sede

  $Ciudad = "Bogotá";
  $Ciudad2 = "Quito";
  $Ciudad3 = "Santiago";
  $Ciudad4 = "New York";

  echo "La ciudad en donde se encuentra la sede es:<h3>$Ciudad</h3>";

  // Creamos una variable para determianr la direccion del lugar
  $Direccion = "Cra 68 #37";


  echo "La direccion del lugar en donde se estan vendiendo estos productos es : <h3>$Direccion</h3>";
  ?>

<font color="Blue" face="Comic Sans MS,arial">
  
<?php
  echo '<h1>Muchas Gracias!!!</h1>';

  ?>


  
</center>
      </body>
      </html>