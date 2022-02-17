<?php
    $json = (object) array(
        'cep' => '', 
        'logradouro' => '',
        'complemento' => '',
        'bairro' => '',
        'localidade' => '',
        'uf' => '',
        'ibge' => '',
        'ddd' => ''
    );

    if(isset($_POST['cep']) && !empty($_POST['cep'])){
        $json = file_get_contents("https://viacep.com.br/ws/".$_POST['cep']."/json");
        $json = json_decode($json);
        
        if(empty($json->cep)){
            $json->cep = "VAZIO";
            $json->logradouro = "VAZIO";
            $json->complemento = "VAZIO";
            $json->bairro = "VAZIO";
            $json->localidade = "VAZIO";
            $json->uf = "VAZIO";
            $json->ibge = "VAZIO";
            $json->ddd = "VAZIO";
        }
    }
?>