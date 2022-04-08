<?php

namespace HelloWorld\Render;

use Twig\Environment;
use Twig\Loader\ArrayLoader;

class Page
{
    static public function display(){
        $loader = new ArrayLoader([
            'index' => 'Hello {{ name }}!',
        ]);
        $twig = new Environment($loader);

        echo $twig->render("../../render/test.twig", ['name' => 'Fabien']);
    }
}