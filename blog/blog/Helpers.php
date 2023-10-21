<?php
/*
function formartarValor(float $valor): string
{
    return number_format($valor, 2, ',', '.');
}
*/
function formartarValor(float $valor): string
{
    return 'R$:' . number_format(($valor ? $valor : 0), 2, ',', '.');
}

function formatarNumero(string $num = null): string
{
    return number_format($num ? $num : 0, 0, '.', '.');
}


function saudacao(): string
{
    echo $hora = date('H;i;s');
    $saudacao = '';

    if ($hora >= 0 && $hora <= 5) {
        $saudacao = 'boa madrugada';
    } elseif ($hora >= 6 && $hora <= 12) {
        $saudacao = 'bom dia';
    } elseif ($hora >= 13 && $hora <= 18) {
        $saudacao = 'boa tarde';
    } else {
        $saudacao = 'boa noite';
    }
    return $saudacao;
}

/** 
 * resume um texto
 * 
 * @param string $texto texto para resumir
 * @param int $limite quantidade de caracteres
 * @param string $continue opcional - caso o limte seja atingido mostra o que deve ser exibido ao final do resumo
 * @return string texto resumido
 */

function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim(strip_tags($texto));
    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto . $continue;
}
