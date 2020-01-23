<?php

namespace controllers;

use core\View;
use core\Database;

class MainController
{

    private $view;

    private $db;

    public function __construct()
    {
        $this->view = new View('app');
        $this->db = new Database();
    }

    public function main()
    {
        $articles = $this->db->query('SELECT * FROM `articles`;');
        $this->view->renderHtml('views/Main.php', ['articles' => $articles]);
    }

    public function sayHello(string $name)
    {
        $title = ['title' => 'Страница приветствия'];
        $this->view->renderHtml('views/Hello.php', ['name' => $name, 'title' => $title]);
    }


}