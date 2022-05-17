<?php
//echo "<select>";
// $i é a variavel inicial "$i < 10" é a condição e $i++ é o contador"
//for ($i= date("Y"); $i > date("Y")-100; $i--){
//    echo '<option value="'.$i.'">'.$i.'</option>';
//}
$meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

foreach ($meses as $index => $mes){
    echo 'A posição do mes é: '.$index.' e o mes é: '.$mes.'<br />';
}


?>