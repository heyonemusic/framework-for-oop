<?php

// Класс для работы с БД

namespace core;


class Database
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO(
            'mysql:host=localhost;dbname=blogforoop;',
            'root',
            ''
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public function query(string $sql, $params = [])
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if (false === $result) {
            return null;
        }
        return $sth->fetchAll();
    }

}