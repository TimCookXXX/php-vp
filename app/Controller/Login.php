<?php
namespace App\Controller;

use App\Model\User;
use Base\AbstractController;

class Login extends AbstractController
{
    public function index()
    {
        return $this->view->render(
            'login.phtml',
            [
                'title' => 'Регистрация'
            ]
        );
    }

    public function register()
    {
        $name = (string) $_POST['name'];
        $password = (string) $_POST['password'];
        $password2 = (string) $_POST['password_2'];
        $email = (string) $_POST['email'];

        if (!$name || !$password) {
            return 'Не заданы имя и пароль';
        }

        if (!$email) {
            return 'Не задан email';
        }

        if ($password !== $password2) {
            return 'Введенные пароли не совпадают';
        }

        if (mb_strlen($password) < 5) {
            return 'Пароль слишком короткий';
        }

        $userData = [
            'name' => $name,
            'password' => $password,
            'created_at' => date('Y-m-d H:i:s'),
            'email' => $email
        ];

        $user = new User($userData);
        $user->save();

        return 'Вы успешно зарегистрировались';
    }
}