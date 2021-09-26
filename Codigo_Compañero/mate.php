<DOCTYPE! html>
<html>
	<head>
    <title>
      Wendy Homecenter
    </title>
	</head>
	<body bgcolor=#ffffff
    background="https://fondosmil.com/fondo/9928.jpg">
	</body>
</html>
<!DOCTYPE html>

<center>
    <div id= "header" class="section">
    <img alt="" class= "img-circle" src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Logo_Homecenter_Sodimac.png"
    </center>

<!DOCTYPE HTML>  
<html>
<head>
<a 
<img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Logo_Homecenter_Sodimac.png">
    </a>
<style>
.error {color: #C7142F;}
</style>
</head>
<body>  
    <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de compra</title>
</head>

<!--se alinea el cuerpo del formulario-->
<body>
<div align='center'>
 <!--Transfrencia de datos-->
 <h1 aling="center" >Transferencia De Datos</h1>

  <!--Mostramos las dieferentes ofertas del servicio para la entrada-->
  <center>
 <h1 aling="center" >Transferencia De Datos Entrantes desde Amazon S3 a internet</h1>
 <table>
<tr>
    <th>Cantidad</th>
    <th> Precio</th>
</tr>
<tr>
<td>Todas las transferencias entrantes de datos</td>
<td>0,00 USD por GB</td>
</tr>
 </table>
 <!--Mostramos las dieferentes ofertas del servicio para la salida-->

 <h1 aling="center" >Transferencia De Datos Salientes desde Amazon S3 a internet</h1>

  <!--Le colocamos bordes a la tablita-->
 <style>
     table, th, td{
         border: 1px solid black;
     }
 </style>
   <!--Creamos la tablita para mostrar cada una de las ofertas-->
 <table>
<tr>
<td>N°</td>
    <th>Cantidad</th>
    <th> Precio</th>
</tr>
<tr>
<td>1</td>
<td>Hasta 1 GB al mes</td>
<td>0,00 USD por GB</td>
</tr>
<tr>
<td>2</td>
<td>Siguientes 9,999 TB/mes</td>
<td>0,09 USD por GB</td>
</tr>
<tr>
<td>3</td>
<td>Siguientes 40 TB/mes</td>
<td>0,085 USD por GB</td>
</tr>
<tr>
<td>4</td>
<td>Siguientes 100 TB/mes</td>
<td>0,07 USD por GB</td>
</tr>
<tr>
<td>5</td>
<td>Superior a 150 TB/mes</td>
<td>0,05 USD por GB</td>
</tr>

</table>

<h1 aling="center" ></h1>
</center>

<!--Creamos la tablita para mostrar cada una de las ofertas-->

  <form action = "amazon_s3.php" method= "POST">
      <fieldset>
          <label for = "nom1">Escoja la opcion segun el numero</label>
          <input type ="Text" placeholder= "Escribe aquí el precio"name= "nom1" id = "nom1">
          <br> <br>

          <label for = "nom2">Cantidad total a utilizar en(TB) de datos</label>
          <input type ="text" placeholder= "Escribe aquí el precio"name = "nom2"id = "nom2">
          <br> <br>

          <label for = "nom3">Digite fecha y hora</label>
          <input type ="datetime-local" placeholder= "Escribe aquí el precio"name = "nom3"id = "nom3">
          <br> <br>

          <label for = "nom4">Metodo de pago</label>
          <input type ="Text" placeholder= "Escribe aquí el precio" name= "nom4" id = nom4">
          <br> <br>

          <input type="submit" value="Enviar" name = "enviar" id = "enviar">
          <h1 aling="center" ></h1>
 