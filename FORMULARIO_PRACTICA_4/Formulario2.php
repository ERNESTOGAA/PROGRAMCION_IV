<DOCTYPE! html>
<html>


    <haed>
              <title>Resultado</title>
     </head>

 <body>
       <?php

        $valor1 = $_POST["primer_valor"];//$GET["usuario"];
     	$valor2 = $_POST["segundo_valor"];
       $op1 = $_POST[ "operacion"];
       $op2 = $_POST[ "operacion"];
       $op3 = $_POST[ "operacion"];
       $op4 = $_POST[ "operacion"];

       if($op1 == "suma"){

        $suma= $valor1 + $valor2;

          echo "la suma de $valor1 + $valor2 es: ".$suma;

 }



if($op2 == "resta"){


        $resta= $valor1 - $valor2;

          echo "la resta de $valor1 - $valor2 es: ".$resta;

 }

if($op3 == "divicion"){

        $divicion= $valor1 / $valor2;

          echo "la divicion de $valor1 /  $valor2 es: ".$divicion;

 }
if($op4 == "multiplicacion"){

        $multiplicacion= $valor1 * $valor2;

          echo "la multiplicaion de $valor1 * $valor2 es: ".$multiplicacion;

 }



          




         
        
          





?>


</body>



</html>
