<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include_once("Classe.php");
include_once("Alunno.php");
 Class AlunniController{

    function showAll(Request $request, Response $response, $args){
        $a1 = new Alunno("piero","angelico",15);
        $a2 = new Alunno("marco","didilescu",16);
        $a3 = new Alunno("giuliano","filippini",15);
        $a4 = new Alunno("riccardo","grandi",14);

        $al = array($a1, $a2, $a3, $a4);
        $c = new Classe(5,"dia",$al);

        $response->getBody()->write($c->toString());

        return $response;
    }

    function single(Request $request, Response $response, $args){
        $a1 = new Alunno("piero","angelico",15);
        $a2 = new Alunno("marco","didilescu",16);
        $a3 = new Alunno("giuliano","filippini",15);
        $a4 = new Alunno("riccardo","grandi",14);
        $al = array($a1, $a2, $a3, $a4);
        $c = new Classe(5,"dia",$al);
        //metodo find molto comodo
        $res=$c->find($args['nome']);
        if(!empty($res)){
            $response->getBody()->write($res->toString());
        }else{
            $response->getBody()->write("alunno destroied");
        }
        
        return $response;
    }


 }
?>