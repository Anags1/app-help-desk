<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;

    $arquivo = fopen('arquivo.hd', 'a');
    var_dump($arquivo);
    fwrite($arquivo, $texto);

    fclose($arquivo);
    //echo $texto;  
    header('Location: abrir_chamado.php');
?>