<?php
    echo'<pre>';
    print_r($_POST);
    echo'</pre>';

session_start();

    $titulo = str_replace('#','-',$_POST['titulo']);

    $descricao = str_replace('#','-',$_POST['descricao']);
    
    $categoria = str_replace('#','-',$_POST['categoria']);

    
   $texto = $_SESSION['id'].'#'.$titulo.'#'.$categoria.'#'.$descricao.PHP_EOL; //PHP_EOL PULA UMA LINHA APÓS REGISTRO É UMA CTA
   $texto2= str_replace('#','-',$texto);
   $arquivo=fopen("arquivo.txt","a")/*primeiro parâmetro é o nome do arquivo e o 2º o tipo de operação para fazer com o arquivo ex: parâmetro 'a' é para abrir o arquivo para escrita*/;
    
    
    
   fwrite($arquivo,$texto);/*Vai escrever dentro do arquivo */
   fclose($arquivo);//fechar qualquer arquivo aberti
   echo $texto2;
   header('Location: abrir_chamado.php');
?>