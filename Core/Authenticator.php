<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {
        $user = App::resolve(Database::class)
            ->query('select * from users where email = :email', [
            'email' => $email
        ])->find();

        if ($user) {
            if (($password === $user['password'])) {
                $_SESSION['user'] = [
                    'email' => $user['email']
                ];
                $_SESSION['admin'] = ($user['type'] === 1) ? true : false;

                return true;
            }
        }

        return false;
    }

    public function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];
        session_regenerate_id(true);
    }

    public function logout()
    {
        Session::destroy();
    }
}