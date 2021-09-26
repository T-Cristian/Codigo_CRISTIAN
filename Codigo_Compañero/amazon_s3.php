<center>

<?php

// se asigna la variable de la opcion que se escogio
$opcion = $_POST["nom1"];

// se asigna la variable de la cantidad de horas
$cantidad = $_POST["nom2"];
// se asigna la variable del metodo de pago y la fecha
$fecha = $_POST["nom3"];

$metodo = $_POST["nom4"];

// Mostramos la opcion que colo el cliente

echo "La Opcion que escogio es: <h3>$opcion</h3>";

echo "La cantidad total en TB Es de: <h3>$cantidad</h3>";

//Se realiza la conversion de TB A GB

$conversion= $cantidad * 1000;

echo "La cantidad total en GB Es de: <h3>$conversion</h3>";

//Mostrar la fecha

echo "La fecha y hora es: <h3>$fecha</h3>";

//Mostrar el metodo de pago

echo "El metodo de pago es: <h3>$metodo</h3>";

// Se determinan los valores para cada caso

$Valor1=0.00;
$Valor2=0.09;
$Valor3=0.085;
$Valor4=0.07;
$Valor5=0.05;

   // se determina el la variable para eñ total

  // Determinamos la variable para la operacion para determinar el precio en cada caso

$Caso1=0.00 * $conversion;
$Caso2=0.09 * $conversion;
$Caso3=0.085 * $conversion;
$Caso4=0.07 * $conversion;
$Caso5=0.05 * $conversion;

// Dividimos en 1000 el total y esp seria lo que se pagaria cada mes

$tb1= $Caso1 * 0.001;
$tb2= $Caso2 * 0.001;
$tb3= $Caso3 * 0.001;
$tb4= $Caso4 * 0.001;
$tb5= $Caso5 * 0.001;

// Conversion para otras monedaas

// Dolar a pesos colombianos

$pesos1=$tb1* 3827.00;
$pesos2=$tb2* 3827.00;
$pesos3=$tb3* 3827.00;
$pesos4=$tb4* 3827.00;
$pesos5=$tb5* 3827.00;

// Dolar a euros 

$euro1=$tb1* 0.85;
$euro2=$tb2* 0.85;
$euro3=$tb3* 0.85;
$euro4=$tb4* 0.85;
$euro5=$tb5* 0.85;


// Es muy importante tener en cuenta que la condicion se hacen gigas y no tb
if ($cantidad < 9.999){

    echo "Su total a pagar al mes en dolares es de: <h3>$$tb2</h3>";
    echo "Su total a pagar al mes en pesos colombianos es de: <h3>$$pesos2</h3>";
    echo "Su total a pagar al mes en euros es de: <h3>€$euro2</h3>";

}

elseif ($cantidad < 40 && $cantidad > 9.999){

    echo "Su total a pagar al mes en dolares es de: <h3>$$tb3</h3>";
    echo "Su total a pagar al mes en pesos colombianos es de: <h3>$$pesos3</h3>";
    echo "Su total a pagar al mes en euros es de: <h3>€$euro3</h3>";
    
}

elseif ($cantidad < 100 && $cantidad > 40){

    echo "Su total a pagar al mes en dolares es de: <h3>$$tb4</h3>";
    echo "Su total a pagar al mes en pesos colombianos es de: <h3>$$pesos4</h3>";
    echo "Su total a pagar al mes en euros es de: <h3>€$euro4</h3>";
    
}

elseif ($cantidad < 150 && $cantidad > 100){

    echo "Su total a pagar al mes en dolares es de: <h3>$$tb5</h3>";
    echo "Su total a pagar al mes en pesos colombianos es de: <h3>$$pesos5</h3>";
    echo "Su total a pagar al mes en euros es de: <h3>€$euro5</h3>";
    
}


  

?>

</center>