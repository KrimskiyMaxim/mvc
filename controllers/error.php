<?php
/**
 * Created by PhpStorm.
 * User: Krimskiy Maxim
 * Date: 14.06.2018
 * Time: 17:08
 */

namespace controllers;


use kernel\system\Controller;

class error extends Controller
{
    function actionError_404() {
        http_response_code(404);
        $this->view('404');
    }
}