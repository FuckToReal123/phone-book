<?php


namespace controllers;


use core\base\BaseController;

class AuthController extends BaseController
{
    public function actionIndex()
    {
        $this->render('index', ['a' => 'b']);
    }
}