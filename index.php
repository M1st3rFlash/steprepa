<?php

require_once "config.php";

try {
    if (DEVELOP_MODE == true) {
        error_reporting(E_ALL);
    } else {
        error_reporting(0);
    }

    // инициализация приложения
} catch (Exception $ex) {
    //  логировать все ошибки!!!!
}
