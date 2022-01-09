<?php

require_once 'AppController.php';
require_once __DIR__.'/../repository/Questions.php';

class DefaultController extends AppController {

    private $questions;

    public function __construct()
    {
        parent::__construct();
        $this->$questions = new Questions();
    }

    public function index()
    {
        $_SESSION["questionnumber"] = 1;
        $this->cookieExists();

        $this->render('login');
    }

    public function about_us()
    {
        $_SESSION["questionnumber"] = 1;
        $this->cookieNotExists();

        $this->render('about_us');
    }

    public function questions() {
        $repository = new Questions();

        $questions = $repository->getAllQuestions();

        echo json_encode($questions);
    }

    public function answer() {
        $this->cookieNotExists();

        $answer = json_decode(file_get_contents('php://input'));
        $this->compass_action($answer->idq, $answer->value);
    }

    // private function compass_action($idq, $value)
    // {
    //     $_SESSION['value_w'] += $value*$this->$questions->getWidthValue($idq);
    //     $_SESSION['value_h'] += $value*$this->$questions->getHeightValue($idq);
    //     $_SESSION['questionnumber'] += 1;

    //     $_SESSION['questionnumber'] = $idq;
    // }
}