<?php

/**
 * @author marlon
 */


 $ProcesaFormulario= false;



 
 if(isset($_POST['enviar'])){
    $ProcesaFormulario=true ;
}


if($ProcesaFormulario){
    echo "paises:";

}




?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Examen</title>
    </head>
    <body>

<form action="" method="post">
        
<label for="pregunta1">¿Cuales de los siguientes paises esta en America del sur?</label><br/>
<label><input type="checkbox" name="brasil" value="">Brasil</label>
<label><input type="checkbox" name="paises" value="">Mexico</label>
<label><input type="checkbox" name="paises" value="">Argentina</label>
<label><input type="checkbox" name="paises" value="">España</label>
<br/><br/>
<label for="pregunta2">¿Que oceanos rodean el continente africano?</label><br/>
<label><input type="checkbox" name="oceanos" value="atlantico">Atlantico</label>
<label><input type="checkbox" name="oceanos" value="indico">Indico</label>
<label><input type="checkbox" name="oceanos" value="pacifico">Pacifico</label>
<label><input type="checkbox" name="oceanos" value="artico">Artico</label>
<br/><br/>
<label for="pregunta3">¿Cuales de las siguientes son montañas o sistemas montañosos?</label><br/>
<label><input type="checkbox" name="montañas" value="himalaya">Himalaya</label>
<label><input type="checkbox" name="montañas" value="amazonas">Amazonas</label>
<label><input type="checkbox" name="montañas" value="andes">Andes</label>
<label><input type="checkbox" name="montañas" value="Rio-nilo">Rio Nilo</label>
<br/><br/>
<label for="pregunta4">¿Que continentes cruzan la linea del Ecuador?</label><br/>
<label><input type="checkbox" name="continentes" value="america">America del Norte</label>
<label><input type="checkbox" name="continentes" value="africa">Africa</label>
<label><input type="checkbox" name="continentes" value="Asia">Asia</label>
<label><input type="checkbox" name="continentes" value="oceania">Oceania</label>
<br/><br/>
<label for="pregunta5">¿El rio Amazonas es el mas largo del mundo?</label><br/>
<label ><input type="radio" name="verdadero-falso1" id="verdadero">>Verdadero</label>
<label ><input type="radio" name="verdadero-falso1" id="falso">Falso</label>
<br/><br/>
<label for="pregunta6">¿El desierto del sahara es el mas grande del mundo?</label><br/>
<label ><input type="radio" name="verdadero-falso2" id="verdadero">Verdadero</label>
<label ><input type="radio" name="verdadero-falso2" id="falso">Falso</label>
<br/><br/>
<label for="pregunta7">¿Australia es tanto u pais como un continente?</label><br/>
<label ><input type="radio" name="verdadero-falso3" id="verdadero">Verdadero</label>
<label ><input type="radio" name="verdadero-falso3" id="falso">Falso</label>
<br/><br/>
<label for="pregunta8">¿El monte everest es la montaña mas alta del mundo?</label><br/>
<label ><input type="radio" name="verdadero-falso4" id="verdadero">Verdadero</label>
<label ><input type="radio" name="verdadero-falso4" id="falso">Falso</label>
<br/><br/>
<label for="pregunta9">¿cual es la capital de japon?</label><br/>
<label><input type="text" name="japon"></label>
<br/><br/>
<label for="pregunta10">¿cual es la comunidad autonoma de españa que tiene como lengua cooficial el euskera?</label><br/>
<label><input type="text" name="comunidad"></label>
<br/><br/>

<input type="submit" value="enviar" name="enviar">










</form>

</body>
</html>
