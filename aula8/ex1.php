<?php

    if (session_status()!=2)
    {
        session_start();
    }
    echo "<p>ID da sessão: " . session_id();
    //session_destroy(); destruir a sessão
    echo "<pre>";

    $_SESSION['teste'] = 456;
    print_r($_SESSION);

    session_unset(); // limpa os dados superglobal
    print_r($_SESSION);

    $_SESSION['teste'] = 000;
    print_r($_SESSION);

    $_SESSION = array(); // limpa os dados superglobal
    print_r($_SESSION);
    session_destroy();

    if(session_status()){
        echo "Sem sessão ativa";
    }

?>