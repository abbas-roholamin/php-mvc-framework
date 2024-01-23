<?php


namespace app\controllers;


use thecodeholic\phpmvc\Controller;
use app\models\User;

class UserController extends Controller
{


    public function index()
    {
        $users = User::all();
        return $this->render('users', [
            'users' => $users
        ]);
    }
}
