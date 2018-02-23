<h1>exo1:</h1><br>
<?php 

$nombre = 1;

while ($nombre <= 100)
{
    echo "  $nombre";  '<br />';
    $nombre++;
}


?><br><h1>exo2:</h1><br>
<?php 
$technos = ["Php", "Ruby", "Javascript", "Html"];

if($technos =="front"){
    echo "Je suis un dev front et je connais le Javascript et l'Html
    ";
}else{
    echo"Je suis un dev back et je connais le Php, le Ruby et le Javascript
    ";
}

?><br><h1>exo3:</h1><br>
<?php

array_push($tecnos,"python");
echo $technos;

?>