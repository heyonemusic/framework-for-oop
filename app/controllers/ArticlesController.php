<?php

namespace controllers;

use core\View;
use core\Database;

class ArticlesController
{

    private $view;

    private $db;

    public function __construct()
    {
        $this->view = new View('app');
        $this->db = new Database();
    }

    public function view(int $articleId)
    {
        $result = $this->db->query(
            'SELECT * FROM `articles` WHERE id = :id;',
            [':id' => $articleId]
        );

        if ($result === []) {
            $this->view->renderHtml('../templates/error/404.php', [], 404);
            return;
        }

        $user = $this->db->query(
            'SELECT `nickname` FROM `users` WHERE id = :id',
            [':id' => $result[0]['author_id']]
        );

        if ($user === []) {
            $user[0]['nickname'] = 'Неизвестно';
        }

        $this->view->renderHtml('views/Articles.php', ['article' => $result[0], 'nickname' => $user[0]['nickname']]);
    }


}