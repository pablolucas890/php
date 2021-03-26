<?php

session_start();
    //Montando o texto
    $titulo = str_replace('#','-',$_POST['titulo']);
    $categoria = str_replace('#','-',$_POST['categoria']);
    $descricao = str_replace('#','-',$_POST['descricao']);
    //implode('#',$_POST);

    $texto = $_SESSION['id'].'#'.$titulo.'#'.$categoria.'#'.$descricao.PHP_EOL;
    
    //http://php.net/manual/pt_BR/function.fopen.php
    //Abrindo o arquivo
    if (!$arquivo = fopen('arquivo.hd','a')) {
        echo "Não foi possível abrir o arquivo ";
        exit;
   }
    echo $texto;
    //Escrevendo texto no arquivo
    fwrite($arquivo,$texto);

    //Fechando o arquivo
    fclose($arquivo);
    header('Location: home.php');

    //echo $texto;
?>