<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

require_once __DIR__ . "/../services/gameServices.php";
require_once __DIR__ . "/../services/typeServices.php";

class gameControllers {
    public function getAll($request, $response, $args) {

        $obj = new gameServices();
        $games = $obj->getAll();

        var_dump($games);

        $response->getBody()->write("AAAA");
        return $response;
    }

    public function index($request, $response, $args) {
        $view = Twig::fromRequest($request);

        $obj = new gameServices();
        $games = $obj->getAll();
    
        return $view->render($response, 'index.twig', [
            'games' => $games,
        ]);
    }

    public function create($request, $response, $args) {
        $obj = new gameServices();
        $datos = $request->getParsedBody();
        $game = $obj->create($datos);

        return $response
            ->withHeader('Location', '/')
            ->withStatus(302);
    }

    public function delete($request, $response, $args) {
        $id = $args["id"];
        $obj = new gameServices();
        $borrado = $obj->delete($id);

        return $response
            ->withHeader('Location', '/')
            ->withStatus(302);
    }

    public function formCrear($request, $response, $args) {
        $view = Twig::fromRequest($request);

        $objTypes = new typeServices();
        $types = $objTypes->getAll();

        return $view->render($response, 'crearGame.twig', ['types' => $types,]);
    }

    public function formEditar($request, $response, $args) {
        $id = $args["id"];
        $view = Twig::fromRequest($request);

        $obj = new gameServices();
        $games = $obj->getById($id);

        $objTypes = new typeServices();
        $types = $objTypes->getAll();
    
        return $view->render($response, 'crearGame.twig', [
            'game' => $games, 'types' => $types,
        ]);
    }

    public function update($request, $response, $args) {
        $id = $args["id"];

        $datos = $request->getParsedBody();

        $obj = new gameServices();
        $game = $obj->update($datos, $id);

        return $response
            ->withHeader('Location', '/')
            ->withStatus(302);
    }
}