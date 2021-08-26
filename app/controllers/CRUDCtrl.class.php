<?php

namespace app\controllers;

use core\App;
use PDO;

class CRUDCtrl {

    public function action_create() {


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

        $pdo = pdo_connect_mysql();
        $msg = '';

        // Check if POST data is not empty
        if (!empty($_POST)) {

            // Post data not empty insert a new record
            // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
            $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
            // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
            // Insert new record into the contacts table
            $stmt = $pdo->prepare('INSERT INTO tasks VALUES (?, ?, ?, ?)');
            $stmt->execute([$id, $name, $created, $_SESSION['id']]);
            // Output message
            $msg = 'Created Successfully!';
        }


        App::getSmarty()->assign('msg', $msg);
        App::getSmarty()->display('CreateView.tpl');
    }

}
