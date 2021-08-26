<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login');
App::getRouter()->setLoginRoute('login');

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('loginValidate', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('registerValidate', 'RegisterCtrl');

Utils::addRoute('profile', 'ProfileCtrl');

Utils::addRoute('add', 'CreateCtrl');

Utils::addRoute('tasks', 'ReadCtrl');

Utils::addRoute('edit', 'UpdateCtrl');

Utils::addRoute('remove', 'DeleteCtrl');
