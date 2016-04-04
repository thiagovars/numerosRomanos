<?php
$numeros = array(1, 2, 3, 10, 11, 13, 14, 15, 16, 17, 20, 21, 22, 23, 25, 30, 31, 32, 33);
$menorNumero = 999;
for ($i=0; $i < count($numeros); $i++) { 
  $menorNumero = menorNumero($menorNumero, $numeros[$i]);
  $maiorNumero = maiorNumero($maiorNumero, $numeros[$i]);
  if(($numeros[$i+1] - $numeros[$i]) != 1) {
    if ($menorNumero != $maiorNumero) {
      $intervalos .= '['.$menorNumero.'-'.$maiorNumero.'], ';
    } else {
      $intervalos .= '['.$maiorNumero.'], ';
    }
    $menorNumero = $numeros[$i+1];
    $maiorNumero = 0;
  }
}
echo $intervalos;

function maiorNumero($numeroAtual, $numeroTestado) {
  return ($numeroAtual > $numeroTestado) ? $numeroAtual : $numeroTestado;
}

function menorNumero($numeroAtual, $numeroTestado) {
  return ($numeroAtual < $numeroTestado) ? $numeroAtual : $numeroTestado;
}

?>
