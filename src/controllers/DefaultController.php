<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        if (!isset($_SESSION)){
            session_start();
        }

        setcookie("questionnumber", 1, time() + (12 * 86400 * 30), "/");
        $this->cookieExists();

        $this->render('login');
    }

    public function about_us()
    {
        if (!isset($_SESSION)){
            session_start();
        }

        setcookie("questionnumber", 1, time() + (12 * 86400 * 30), "/");
        $this->cookieNotExists();

        $this->render('about_us');
    }
}