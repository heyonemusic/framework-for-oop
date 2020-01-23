<?php

namespace controllers;

use core\View;

class MainController
{

    private $view;

    public function __construct()
    {
        $this->view = new View('app');
    }

    public function main()
    {

        $articles = [
            ['name' => 'Статья 1', 'text' => 'Текст статьи 1'],
            ['name' => 'Статья 2', 'text' => 'Текст статьи 2'],
        ];
        $this->view->renderHtml('views/Main.php', ['articles' => $articles]);
    }

    public function sayHello(string $name)
    {
        $title = ['title' => 'Страница приветствия'];
        $this->view->renderHtml('views/Hello.php', ['name' => $name, 'title' => $title]);
    }


}