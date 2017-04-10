<?php namespace Dominio;

include_once APPPATH.'/models/Dominio/Servico.php';
include_once APPPATH.'/models/Dominio/Sistema.php';
include_once APPPATH.'/models/Dominio/DadosPessoais.php';
include_once APPPATH.'/models/Dominio/Transaction.php';

class MakeTransaction {

        function getTransaction($codigoSistema, $codigoServico, $descricaoServico, $cpd, $cpf, $numInscricao, $nome, $valorTotal) {

        $servico = new Servico($codigoServico, $descricaoServico, $valorTotal);

        $sistema = new Sistema($codigoSistema, $servico->serialize());

        $dadosPessoais = new DadosPessoais($cpd, $cpf, $numInscricao, $nome);


        $transaction = new Transaction($dadosPessoais->serialize(), $sistema->serialize());
        //echo json_encode($transaction->serialize());
        //var_dump($transaction);
        //Redirect("http://www.famaz.edu.br/ServicosOnline/rede/home?token=25231f2bd30c3c3d490e1e9a03729f94&requisicao=" . urlencode(json_encode($transaction->serialize())));  
        return urlencode(json_encode($transaction->serialize()));
    }

}