<?php
namespace controllers;
use kernel\system\Controller;

class about extends Controller {
    function actionIndex() {
        $this->view('about');
    }
}