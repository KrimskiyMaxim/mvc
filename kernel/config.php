<?php
namespace kernel;

class config
{
    static function get_config()
    {
        return array(
            'SESSION_ON' => true, //Включение сессии
            'SHOW_ERRORS' => true, //Показ ошибок

            'SESSION_BRANCH' => 'MVC', //Отдельная директория сессии под весь проект
            'AUTH_DATA' => 'USER', //Название переменной в сессии, где хранится информация о пользователе

            'AUTH_LOCATION' => '/', //Путь редиректа, если есть авторизация
            'NO_AUTH_LOCATION' => 'login', //Путь редиректа, если нет авторизации

            'DB_HOST' => 'localhost',
            'DB_PORT' => '3306',
            'DB_BASE' => 'mvc',
            'DB_USER' => 'root',
            'DB_PASS' => '',

            'LAST_MODIFICATION' => 1519221585 //Дата последнего редактирования
        );
    }
}