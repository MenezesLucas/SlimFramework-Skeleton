<?php

namespace App\Controllers;

class Controller {
    protected $view;

    public function __construct($container) {
        $this->view = $container->view;
        $this->flash = $container->flash;
    }
}