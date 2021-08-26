<?php

namespace app\controllers;

use core\App;

class RegisterCtrl {

    public function action_register() {

        App::getSmarty()->display('Register.tpl');
    }

    public function action_registerValidate() {

        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'todo';

        $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
        if (mysqli_connect_errno()) {

            exit('Nie udało się połączyć z bazą danych! ' . mysqli_connect_error());
        }

        if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {

            exit('Wypełnij formularz rejestracyjny!');
        }

        if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {

            exit('Wypełnij formularz rejestracyjny!');
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

            exit('Aders e-mail jest nieprawidłowy!');
        }

        if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {

            exit('Nazwa użytkownika jest nieprawidłowa!');
        }

        if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {

            exit('Hasło musi mieć od 5 do 20 znaków!');
        }

        if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {

            $stmt->bind_param('s', $_POST['username']);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {

                echo 'Nazwa użytkownika istnieje, wybierz inną!';
            } else {

                if ($stmt = $con->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)')) {

                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
                    $stmt->execute();
                    App::getSmarty()->display("Login.tpl");
                } else {

                    echo 'Nie udało się wykonać zapytania!';
                }
            }
            $stmt->close();
        } else {

            echo 'Nie udało się wykonać zapytania!';
        }
        $con->close();
    }

}
