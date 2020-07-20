<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

/**
 * Namespace do Controller
 */

$router->namespace("Source\App");

/**
 * Usuarios
 */

$router->group(null);
$router->get("/", "Web:usuarios");


/**
 * Criar Usuario
 */

$router->group("cadastro");
$router->get("/", "Web:cadastro");
$router->post("/cadastrar", "Web:store");

/**
 * Editar Usuario
 */

$router->group("editar");
$router->get("/{id}", "Web:editar");
$router->post("/{id}/", "Web:update");


/**
 * Apagar Usuario
 */
$router->group("destroy");
$router->get("/{id}", "Web:destroy");

/**
 * Rotas Api
 */

$router->group("rest");
$router->get("/", "Api:getAllUsers");
$router->get("/{id}", "Api:getUserById");



$router->dispatch();



