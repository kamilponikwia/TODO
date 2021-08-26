<?php

namespace app\controllers;

use core\App;
use core\Utils;

class ReadCtrl {

    public function action_tasks() {

        $where ["Users_id"] = $_SESSION['id'];

        try {
            $this->records = App::getDB()->select("tasks", [
                "id",
                "name",
                "created",
                    ], $where);
        } catch (\PDOException $e) {

            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów!');

            if (App::getConf()->debug) {

                Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getSmarty()->assign('tasks', $this->records);
        App::getSmarty()->display('Tasks.tpl');
    }

}
