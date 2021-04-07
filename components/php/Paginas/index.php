<?php

    /*TESTES COM O BANCO DE DADOS*/
    //-------------------------------
    /*CONEXÃO COM O BANCO*/
     $servidor = "localhost";
     $usuario  = "root";
     $senha    = "@dibimo7";
     $banco    = "banco_pacientes";

     $conexao = new mysqli($servidor,$usuario,$senha,$banco);

     /*COMANDOS*/
     $comandoSQL = "SELECT * FROM  teste";
     /*ENVIO DOS DADOS*/ 
    // var_dump($conexao->query($comandoSQL)->num_rows); 
    $resultado = mysqli_query($conexao,$comandoSQL);
    // var_dump($resultado);
    //$linhas = mysqli_fetch_assoc($resultado);
    //var_dump($linhas);
    while ($linha = mysqli_fetch_assoc($resultado)) {
        var_dump($linha['nome']);
    }
    

?>