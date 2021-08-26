<?php

namespace app\controllers;

use core\App;
use PDO;

class CreateCtrl {

    public function action_add() {

        function pdo_connect_mysql() {
            
            $DATABASE_HOST = 'localhost';
            $DATABASE_USER = 'root';
            $DATABASE_PASS = '';
            $DATABASE_NAME = 'todo';
            try {
                
                return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
            } catch (PDOException $exception) {
                
                exit('Nie udało się połączyć z bazą danych!');
            }
        }

        $pdo = pdo_connect_mysql();
        $msg = '';

        if (!empty($_POST)) {

            $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');

            $stmt = $pdo->prepare('INSERT INTO tasks VALUES (?, ?, ?, ?)');
            $stmt->execute([$id, $name, $created, $_SESSION['id']]);

            $msg = 'Zadanie zostało dodane!';
        }
        
        App::getSmarty()->assign('msg', $msg);
        App::getSmarty()->display('Create.tpl');
    }

}
