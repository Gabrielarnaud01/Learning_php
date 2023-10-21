    <?php
    //Arquivo index responsável pela inicialização do sistema

    require_once 'sistema/configuracao.php';
    include_once 'Helpers.php';


    if (validarEmail('teste')) {
        echo 'endereço de e-mail valido';
    } else {
        echo 'endereço de e-mail incorreto';
    }
    echo '<br>';
    if (validarUrl('teste')) {
        echo 'endereço de Url valido';
    } else {
        echo 'endereço de Url incorreto';
    }
    echo '<br>';

    var_dump(validarEmail('dale.com'));
