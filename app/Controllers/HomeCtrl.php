<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Models\Produtos;

class HomeCtrl extends Controller {

    public function index(Request $request, Response $response) {
        // Pega todos produtos
        $produtos = Produtos::all();

        // Pega um produto por id
        $produto = Produtos::find(1);

        // Pega produto por condição
        $produto = Produtos::where('id', 1)->get();

        return $this->view->render($response, 'home.twig', [
            // passa o valor pra view home.twig
            'produtos' => $produtos
        ]);
    }
}