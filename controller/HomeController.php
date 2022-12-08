<?php

session_start();
class HomeController extends UserController {
    public $model;

    public function indexAction() {
        $this->checkUserAccess();
        return require_once('../view/dashboard.php');
    }
}