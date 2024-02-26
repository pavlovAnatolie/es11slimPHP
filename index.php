<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
include("Alunno.php");
include("Classe.php");



$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/alunni', function (Request $request, Response $response, $args) {
    $a1 = new Alunno("piero","angelico",15);
    $a2 = new Alunno("marco","didilescu",16);
    $a3 = new Alunno("giuliano","filippini",15);
    $a4 = new Alunno("riccardo","grandi",14);
    $al = array($a1, $a2, $a3, $a4);
    $c = new Classe(5,"dia",$al);

    $response->getBody()->write($c->toString());
    return $response;
});

$app->get('/alunni/{nome}', function (Request $request, Response $response, $args) {
    $a1 = new Alunno("piero","angelico",15);
    $a2 = new Alunno("marco","didilescu",16);
    $a3 = new Alunno("giuliano","filippini",15);
    $a4 = new Alunno("riccardo","grandi",14);
    $al = array($a1, $a2, $a3, $a4);
    $c = new Classe(5,"dia",$al);


    $response->getBody()->write($c->find($args['nome']));
    return $response;
});


$app->run();
