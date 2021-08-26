<?php

namespace app\controllers;

use core\App;

class LoginCtrl {

    public function action_login() {

        App::getSmarty()->display('Login.tpl');
    }

    public function action_loginValidate() {

        if (!isset($_SESSION)) {

            session_start();
        }

        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'todo';

        $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

        if (mysqli_connect_errno()) {

            exit('Nie udało się połączyć z bazą danych!' . mysqli_connect_error());
        }

        if (!isset($_POST['username'], $_POST['password'])) {

            exit('Wypełnij pola nazwy użytkownika i hasła!');
        }

        if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {

            $stmt->bind_param('s', $_POST['username']);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $password);
                $stmt->fetch();

                if (password_verify($_POST['password'], $password)) {

                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['name'] = $_POST['username'];
                    $_SESSION['id'] = $id;
                    App::getRouter()->redirectTo("tasks");
                } else {

                    echo 'Nieprawidłowa nazwa użytkownika i/lub hasło!';
                }
            } else {

                echo 'Nieprawidłowa nazwa użytkownika i/lub hasło!';
            }
            $stmt->close();
        }
    }

    public function action_logout() {

        if (!isset($_SESSION)) {

            session_start();
        }
        session_destroy();

        App::getRouter()->redirectTo("login");
    }

}
