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
     $comandoSQL = "SELECT * FROM  teste where nome='diogo'";
     /*ENVIO DOS DADOS*/ 
    // var_dump($conexao->query($comandoSQL)->num_rows); 
    $resultado = mysqli_query($conexao,$comandoSQL);
    // var_dump($resultado);
    //$linhas = mysqli_fetch_assoc($resultado);
    //var_dump($linhas);
    $linha = mysqli_fetch_assoc($resultado);
    if($linha){
        echo 'existe sim, tá safe';
    }else{
        echo 'mano...não tem nada aqui não...será que não é na camada de cima?';
    }
    while ($linha = mysqli_fetch_assoc($resultado)) {
        var_dump($linha['nome']);
    }
    
   
?>