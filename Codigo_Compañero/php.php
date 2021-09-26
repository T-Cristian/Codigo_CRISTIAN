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

<?php

//se declaran las variables y id de cada valor


$Correo = $_POST["correo"];

$Contraseña1 = $_POST["Contraseña"];

$Usuario = $_POST["Usuario"];

?>
   
<?php
/*
se establecen los resultados
*/

echo "<h1>RESULTADOS DEL INICIO DE SESION</h1>";
echo "LOS NOMBRE DE USUARIO ES : <h3>$Usuario</h3>";
echo "El CORREO DEL CLIENTE ES : <h3>$Correo</h3>";
echo "LA CONTRASEÑA DEL CLIENTE ES: <h3>$Contraseña1</h3>";


// definir variables y establecer condicionales

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nombre'])) {
        $NOMBRESErr = "El nombre es requerido";

    } else {
        $NOMBRES = test_input($_POST['nombre']);
    }

    if (empty($_POST['apellido'])) {
        $APELLIDOSErr = "El apellido es requerido";
    } else {
        $APELLIDOS = test_input($_POST['apellido']);
    }
    

    if (empty($_POST['FECHA'])) {
        $fechaErr = "LA FECHA ES REQUERIDA";
    } else {
        $fecha = test_input($_POST['FECHA']);
    }
}

function test_input ($data) {
    $data = trim($data); 
    //devuelve el valor ingresado
    return $data; 
}

?>