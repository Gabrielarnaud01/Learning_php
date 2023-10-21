<?php

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

function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    return $texto;
}
