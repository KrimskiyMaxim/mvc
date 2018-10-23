<?php
namespace controllers;
use kernel\system\Controller;

class login extends Controller {
    function actionIndex() {
        $this->view('login', [
            'author' => 'KrimskiyMaxim'
        ]);
    }
}