<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

 Class siteController{

    function index(Request $request, Response $response, $args){
        $response->getBody()->write("Hello world!");
        return $response;
    }
 }
?>