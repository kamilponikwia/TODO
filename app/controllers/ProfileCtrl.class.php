<?php

namespace app\controllers;

use core\App;
use core\Utils;

class ProfileCtrl {

    private $records;

    public function action_profile() {

        $where ["id"] = $_SESSION['id'];

        try {
            $this->records = App::getDB()->select("users", [
                "username",
                "password",
                "email",
                    ], $where);
        } catch (\PDOException $e) {

            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów!');

            if (App::getConf()->debug) {

                Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getSmarty()->assign('users', $this->records);
        App::getSmarty()->display('Profile.tpl');
    }

}
