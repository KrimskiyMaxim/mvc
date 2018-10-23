<?php
namespace controllers;
use kernel\system\Controller;

class index extends Controller {
    function actionIndex() {


        $this->view('index', [
            'title' => 'Title Page',
            'content' => 'lorem'
        ]);
    }
}