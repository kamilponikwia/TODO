<?php

namespace app\controllers;

use core\App;
use PDO;

class DeleteCtrl {

    public function action_remove() {

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

        if (isset($_GET['id'])) {

            $stmt = $pdo->prepare('SELECT * FROM tasks WHERE id = ?');
            $stmt->execute([$_GET['id']]);
            $task = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (!$task) {
                
                exit('Zadanie z tym id nie istnieje !');
            }

            if (isset($_GET['confirm'])) {
                
                if ($_GET['confirm'] == 'yes') {

                    $stmt = $pdo->prepare('DELETE FROM tasks WHERE id = ?');
                    $stmt->execute([$_GET['id']]);
                    $msg = 'Zadanie zostało usunięte!';
                } else {

                    App::getRouter()->redirectTo("tasks");
                    exit;
                }
            }
        } else {
            
            exit('Nie podano identyfikatora!');
        }

        App::getSmarty()->assign('task', $task);
        App::getSmarty()->assign('msg', $msg);
        App::getSmarty()->display('Delete.tpl');
    }

}
