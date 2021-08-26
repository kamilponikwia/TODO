<?php

namespace app\controllers;

use core\App;
use PDO;

class TasksCtrl {

    public function action_tasks() {

        function pdo_connect_mysql() {
            $DATABASE_HOST = 'localhost';
            $DATABASE_USER = 'root';
            $DATABASE_PASS = '';
            $DATABASE_NAME = 'todo';
            try {
                return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
            } catch (PDOException $exception) {
                // If there is an error with the connection, stop the script and display the error.
                exit('Failed to connect to database!');
            }
        }

        // Connect to MySQL database
        $pdo = pdo_connect_mysql();

        // Prepare the SQL statement and get records from our tasks table, LIMIT will determine the page
        $stmt = $pdo->prepare('SELECT * FROM tasks WHERE Users_id = ?');
        $stmt->execute([$_SESSION['id']]);
        
        // Fetch the records so we can display them in our template.
        $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        App::getSmarty()->assign('tasks', $tasks);
        App::getSmarty()->display('TasksView.tpl');
    }

}
