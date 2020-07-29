<?php
// require_once 'model/post/post.php';
// require_once 'SiteController.php';
require_once 'model/user.php';
/**
*
*/
class UserController
{
    public $data;
    public $action;
    public $smarty;
    public $user;

    function __construct($data, $action, $smarty)
    {
        $this->data = $data;
        $this->action = $action;
        $this->smarty = $smarty;
        $this->user = new User($this->data);

        if (isset($_SESSION['logged_user']) || $this->action == 'login' || $this->action == 'create' || $this->action == 'index') {
            $this->$action();
        } else {
            $this->smarty->display('errors/error_login.tpl');
        }
    }

    public function index(){
        if (isset($_SESSION['logged_user'])) {
            $li = array(
                'logout' => array(
                    'label' => 'Выйти',
                    'url' => '?page=user&action=logout'),
                'create' => array(
                    'label' => 'Регистрация',
                    'url' => '?page=user&action=create'),
                'info' => array(
                    'label' => 'Информация о пользователе',
                    'url' => '?page=user&action=info'),
                'appeal' => array(
                    'label' => 'Сообщение администратору',
                    'url' => '?page=user&action=appeal'),
                );
        } else {
            $li = array(
                'login' => array(
                    'label' => 'Авторизация',
                    'url' => '?page=user&action=login'),
                'create' => array(
                    'label' => 'Регистрация',
                    'url' => '?page=user&action=create'),
                );
        }
        $this->smarty->assign('li', $li);

        $this->smarty->display('user/index.tpl');
    }

    public function login(){
        if (!isset($this->data['login'])) {
            $this->smarty->assign('message_login', 'Вы можете авторизоваться');
        } else {
            if ($this->user->login()) {
                // $this->user->userType;
                $this->smarty->assign('message_login', 'Успешно');
            } else {
                $this->smarty->assign('message_login', 'Аккаунт или пароль не корректен');
            }
        }

        $input = array(
            'email' => array(
                'label' => 'Email-адрес',
                'name' => 'email',
                'type' => 'email',),
            'password' => array(
                'label' => 'Пароль',
                'name' => 'password',
                'type' => 'password',),
            );

        $this->smarty->assign('input', $input);

        // $this->smarty->display('user/login.tpl');

        $this->smarty->assign('include', 'user/login.tpl');
        $this->index();
        // $this->smarty->display('user/index.tpl');
    }

    public function logout(){
        unset($_SESSION['logged_user']);
        header('Location: ?page=user&action=login');
    }

    public function info(){
        $this->user->userInfo();

        $input = array(
            'password' => array(
                'label' => 'Пароль',
                'name' => 'password',
                'type' => 'password',),
            'password_new' => array(
                'label' => 'Новый пароль',
                'name' => 'password_new',
                'type' => 'password',),
            'password_new_check' => array(
                'label' => 'Повторите новый пароль',
                'name' => 'password_new_check',
                'type' => 'password',),
            'name' => array(
                'label' => 'Имя',
                'name' => 'name',
                'type' => 'text',),
            'surname' => array(
                'label' => 'Фамилия',
                'name' => 'surname',
                'type' => 'text',),
            'patronymic' => array(
                'label' => 'Отчество',
                'name' => 'patronymic',
                'type' => 'text',),
            'date' => array(
                'label' => 'Дата рождения',
                'name' => 'date',
                'type' => 'date',),
            'phone' => array(
                'label' => 'Телефон',
                'name' => 'phone',
                'type' => 'tel',),
            );

        $this->smarty->assign('input', $input);

        // $this->smarty->assign('email',$_SESSION['logged_user']->email);
        // $this->smarty->assign('name',$_SESSION['logged_user']->name);
        // $this->smarty->assign('surname',$_SESSION['logged_user']->surname);
        // $this->smarty->assign('patronymic',$_SESSION['logged_user']->patronymic);
        // $this->smarty->assign('date',$_SESSION['logged_user']->date);
        // $this->smarty->display('user/userInfo.tpl');

        $this->smarty->assign('include', 'user/info.tpl');
        $this->index();
        // $this->smarty->display('user/index.tpl');
    }

    public function create(){
        // $this->user->createUser();
        if (!isset($this->data['registration_user'])) {
            $this->smarty->assign('message_registration', 'Заполните все поля формы');
        } else {
            // $admin = new Admin();
            // $this->user->createUser()
            if ($this->user->createUser()) {
                $this->smarty->assign('message_registration', 'Успешно');
            } else {
                $this->smarty->assign('message_registration', 'Этот Email-адрес занят');
            }
        }
        $input = array(
            'email' => array(
                'label' => 'Email-адрес',
                'name' => 'email',
                'type' => 'email',),
            'password' => array(
                'label' => 'Пароль',
                'name' => 'password',
                'type' => 'password',),
            'password_check' => array(
                'label' => 'Проверка пароля',
                'name' => 'password_check',
                'type' => 'password',),
            'name' => array(
                'label' => 'Имя',
                'name' => 'name',
                'type' => 'text',),
            'surname' => array(
                'label' => 'Фамилия',
                'name' => 'surname',
                'type' => 'text',),
            'patronymic' => array(
                'label' => 'Отчество',
                'name' => 'patronymic',
                'type' => 'text',),
            );

        $this->smarty->assign('input', $input);

        // $this->smarty->display('user/registration.tpl');

        $this->smarty->assign('include', 'user/create.tpl');
        $this->index();
        // $this->smarty->display('user/index.tpl');
    }

    public function appeal(){
        // $this->smarty->display('user/forAdmin.tpl');

        $this->smarty->assign('include', 'user/appeal.tpl');
        $this->index();
        // $this->smarty->display('user/index.tpl');
    }
}

?>
