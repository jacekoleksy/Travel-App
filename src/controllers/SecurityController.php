<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../models/Result.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../repository/Questions.php';

class SecurityController extends AppController {

    private $userRepository;
    private $questions;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->$questions = new Questions();
    }

    public function login()
    {   
        if (!isset($_SESSION)){
            session_start();
        }

        setcookie("questionnumber", 1, time() + (12 * 86400 * 30), "/");
        $this->cookieExists();

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['login-email'];
        $password = $_POST['login-password'];

        $user = $this->userRepository->getUser($email);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->render('login', ['messages' => ["Wrong email type!"]]);
        }

        if (!$user) {
            return $this->render('login', ['messages' => ['User not found!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email exists!']]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        setcookie("user", $email, time() + (12 * 86400 * 30), "/");
        setcookie("name", $user->getName(), time() + (12 * 86400 * 30), "/");
        setcookie("surname", $user->getSurname(), time() + (12 * 86400 * 30), "/");

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/compass");
    }
    
    public function register()
    {   
        if (!isset($_SESSION)){
            session_start();
        }

        setcookie("questionnumber", 1, time() + (12 * 86400 * 30), "/");
        $this->cookieExists();

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['register-email'];
        $password = $_POST['register-password'];
        $confirmpassword = $_POST['register-confirm-password'];
        $name = $_POST['register-name'];
        $surname = $_POST['register-surname'];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->render('login', ['messages2' => ["Wrong email type!"]]);
        }

        if ($password !== $confirmpassword) {
            return $this->render('login', ['messages2' => ["Passwords don't match!"]]);
        }

        if ($this->userRepository->getUser($email) != null) {
            return $this->render('login', ['messages2' => ["User with this email already exists!"]]);
        }

        if ($name == null) {
            return $this->render('login', ['messages2' => ["Your Name is necessarily!"]]);
        }

        if ($surname == null) {
            return $this->render('login', ['messages2' => ["Your Surname is necessarily!"]]);
        }

        if (!isset($_POST['terms-of-use'])) {
            return $this->render('login', ['messages2' => ["You have to accept Terms of Use!"]]);
        }

        setcookie("user", $email, time() + (12 * 86400 * 30), "/");
        setcookie("name", $name, time() + (12 * 86400 * 30), "/");
        setcookie("surname", $surname, time() + (12 * 86400 * 30), "/");

        $user = new User($email, password_hash($password, PASSWORD_BCRYPT), $name, $surname);
        $this->userRepository->addUser($user);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/compass");
    }

    public function compass()
    {
        if (!isset($_SESSION)){
            session_start();
        }

        $this->cookieNotExists();

        // if (!isset($_COOKIE['questionnumber'])) {
            setcookie("questionnumber", 1, time() + (12 * 86400 * 30), "/");
        // }
        // else if ($_COOKIE['questionnumber'] == $this->$questions->getNumberOfQuestions() + 1) {
        //     $this->userRepository->addResult($_COOKIE['user']);
        //     setcookie("questionnumber", $_COOKIE['questionnumber'] + 1, time() + (12 * 86400 * 30), "/");
        //     $url = "http://$_SERVER[HTTP_HOST]";
        //     header("Location: {$url}/results");
        // } 
        // else if ($_COOKIE['questionnumber'] == 1) {
            setcookie("value_w", 0, time() + (12 * 86400 * 30), "/");
            setcookie("value_h", 0, time() + (12 * 86400 * 30), "/");
        // }

        if (!$this->isPost()) {
            return $this->render('compass', ['currentquestion' => $_COOKIE['questionnumber'], 'questionnum' => $this->$questions->getNumberOfQuestions(), 'questiontitle' => $this->$questions->getQuestionTitle($_COOKIE['questionnumber'])]);
        }



    }

    public function compass_action()
    {
        if (!isset($_SESSION)){
            session_start();
        }

        $this->cookieNotExists();

        if (!$this->isGet()) {
            return $this->render('compass');
        }
        else {
            setcookie("value_w", $_COOKIE['value_w'] + $_GET['opinion']*$this->$questions->getWidthValue($_COOKIE['questionnumber']), time() + (12 * 86400 * 30), "/");
            setcookie("value_h", $_COOKIE['value_h'] + $_GET['opinion']*$this->$questions->getHeightValue($_COOKIE['questionnumber']), time() + (12 * 86400 * 30), "/");
            setcookie("questionnumber", $_COOKIE['questionnumber'] + 1, time() + (12 * 86400 * 30), "/");
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/compass");
    }

    public function recommended()
    {
        if (!isset($_SESSION)){
            session_start();
        }

        $this->cookieNotExists();

        $recommended = $this->userRepository->showRecommended($_COOKIE["user"]);

        if (!$recommended) {
            return $this->render('results', ['error' => ['No results yet!', 'You need to complete the ', 'Compass form']]);
        }

        $this->render('recommended', ['recommended' => $recommended]);
    }

    public function results()
    {
        if (!isset($_SESSION)){
            session_start();
        }

        setcookie("questionnumber", 1, time() + (12 * 86400 * 30), "/");
        $this->cookieNotExists();

        $results = $this->userRepository->showResult($_COOKIE["user"]);

        if (!$results) {
            return $this->render('results', ['error' => ['No results yet!', 'You need to complete the ', 'Compass form']]);
        }

        $this->render('results', ['results' => $results]);
    }

    public function settings()
    {
        if (!isset($_SESSION)){
            session_start();
        }
        
        setcookie("questionnumber", 1, time() + (12 * 86400 * 30), "/");
        $this->cookieNotExists();

        $this->render('settings');
    }

    public function settings_action()
    {
        if (!isset($_SESSION)){
            session_start();
        }

        if (!$this->isPost()) {
            return $this->render('settings');
        }

        $this->cookieNotExists();

        $email = $_POST['settings-email'];
        $password = $_POST['settings-password'];
        $newpassword = $_POST['settings-new-password'];
        $name = $_POST['settings-name'];
        $surname = $_POST['settings-surname'];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->render('settings', ['messages' => ["Wrong email type!"]]);
        }

        if ($email !== $_COOKIE["user"]) {
            if ($this->userRepository->getUser($email) != null) {
                return $this->render('settings', ['messages' => ["User with this email already exists!"]]);
            }
        }

        $user = $this->userRepository->getUser($_COOKIE["user"]);
        if (!password_verify($password, $this->userRepository->getPassword($user))) {
            return $this->render('settings', ['messages' => ["Wrong current password!"]]);
        }

        if ($password == $newpassword) {
            return $this->render('settings', ['messages' => ["Passwords are the same!"]]);
        }

        if ($name == null) {
            return $this->render('settings', ['messages' => ["Your Name is necessarily!"]]);
        }

        if ($surname == null) {
            return $this->render('settings', ['messages' => ["Your Surname is necessarily!"]]);
        }

        if ($newpassword !== "") {
            $password = $newpassword;
        }

        $user = $this->userRepository->getUser($_COOKIE["user"]);
        $this->userRepository->editUser($user, $email, password_hash($password, PASSWORD_BCRYPT),  $name, $surname);

        setcookie("user", $email, time() + (12 * 86400 * 30), "/");
        setcookie("name", $name, time() + (12 * 86400 * 30), "/");
        setcookie("surname", $surname, time() + (12 * 86400 * 30), "/");

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/settings");
    }

    public function logout() {
        if (!isset($_SESSION)){
            session_start();
        }
        session_destroy();
        
        $this->deleteCookies();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/");
    }
}