<?php

    $paciente = (json_decode( $_POST['buffer'],true));
    var_dump($paciente['dadosPessoais']['nome']);
?>