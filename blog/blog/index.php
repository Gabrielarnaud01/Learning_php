<?php
//Arquivo index responsável pela inicialização do sistema

require_once 'sistema/configuracao.php';
include_once 'Helpers.php';

$texto = 'dale dale dale dale <p>para</p> resumir';

echo resumirTexto($texto, 50);

$valor = 10;
if ($valor) {
    echo $valor;
} else {
    echo 0;
}

echo ($valor ? $valor : 0);

echo $valor ?: 0;
echo '<br>';
echo  formartarValor($valor);
echo '<br>';
echo  formatarNumero(100);
