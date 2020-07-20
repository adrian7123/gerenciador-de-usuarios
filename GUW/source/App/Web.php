<?php

namespace Source\App;

use CoffeeCode\Router\Router;
use League\Plates\Engine;
use Source\Models\User;

class Web 
{

    private $view;

    public function __construct() 
    {
        $this->view = Engine::create(__DIR__ . "/../Views", "php");

    }

    public function usuarios($data): void 
    {
        $users = (new User)->find()->fetch(true);
        echo $this->view->render("users", [
            "title" => SITE,
            "users" => $users,
        ]);
    }

    public function cadastro($data): void 
    {
        echo $this->view->render("cadastro", [
            "title" => "Cadastro de Usuarios",
        ]);
    }

    public function store($d): void 
    {
        $router = new Router(ROOT);

        $user = new User();

        $user->nome = $d["nome"]; 
        $user->email = $d["email"];
        $user->phone = $d["phone"];
        $user->senha = $d["senha"];
        $user->save();

        $router->redirect("");
    }

    public function editar($d): void
    {
        $user = (new User())->findById($d["id"]);

        echo $this->view->render("editar", [
            "user" => $user,
        ]);

        // var_dump($user);
    }

    public function update($d): void 
    {
        $router = new Router(ROOT);

        $user = (new User())->findById($d["id"]);

        $user->nome = $d["nome"];
        $user->email = $d["email"];
        $user->phone = $d["phone"];
        $user->senha = $d["senha"];
        $user->save();

        $router->redirect("");

    }


    public function destroy($d): void 
    {
        $router = new Router(ROOT);

        $user = (new User())->findById($d["id"]);

        $user->destroy();

        $router->redirect("");

    }
}
