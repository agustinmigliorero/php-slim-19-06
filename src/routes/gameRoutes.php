<?php

require_once __DIR__ . "/../controllers/gameControllers.php";

$app->get("/", [gameControllers::class, "index"]);
$app->post("/game/create", [gameControllers::class, "create"]);
$app->get("/crear/juego", [gameControllers::class, "formCrear"]);
$app->post("/borrar/juego/{id}", [gameControllers::class, "delete"]);
$app->get("/editar/juego/{id}", [gameControllers::class, "formEditar"]);
$app->post("/editar/juego/{id}", [gameControllers::class, "update"]);