    <?php
    //Arquivo index responsável pela inicialização do sistema

    require_once 'sistema/configuracao.php';
    include_once 'Helpers.php';

    $cpf = '004.348.491-38';

    var_dump(validarCpf($cpf));

    //echo $limparNumero = preg_replace('/[^0-9]/', '', $cpf);
