<?php
    /* RESPOSTA DA REQUISIÇÃO, em método JSON, assim o ajax tem a inteligencia de 
    distinguir onde está a resposta e de que forma ela está(JSON) dentro do script que
    foi requerido na url do método ajax */
    echo json_encode($_POST);//convertendo arrays/objetos em uma string JSON
?>