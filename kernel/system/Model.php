<?php
/**
 * Created by PhpStorm.
 * User: Krimskiy Maxim
 * Date: 14.06.2018
 * Time: 17:31
 */

namespace kernel\system;


class Model
{
    public $connect;
    public function __construct()
    {
        $this->connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE,DB_PORT);
    }
    public function query($sql) {
        $this->connect->query($sql);
    }
    public function __destruct()
    {
        $this->connect->close();
    }
}