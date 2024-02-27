<?php
use Slim\Factory\AppFactory;
include_once("controller/siteController.php");
include_once("controller/AlunniController.php");
include_once("controller/AlunniApiController.php");

require __DIR__ . '/vendor/autoload.php';



$app = AppFactory::create();

$app->get('/',             "siteController:index");

$app->get('/alunni',       "AlunniController:showAll");
$app->get('/alunni/{nome}',"AlunniController:single");

$app->get('/api/alunni',       "AlunniApiController:showAll");
$app->get('/api/alunni/{nome}',"AlunniApiController:single");


$app->run();
