<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        helper('form'); // Добавьте эту строку

        $data = [];

        if ($this->request->getMethod() === 'post') {
            $validation = \Config\Services::validation(); // Получаем экземпляр класса валидации

            // Устанавливаем правила валидации
            $validation->setRules([
                'username' => 'required',
                'password' => 'required',
            ]);

            if ($validation->withRequest($this->request)->run()) {
                // Валидация прошла успешно, обрабатываем форму
                $ionAuth = new \IonAuth\Libraries\IonAuth();
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                if ($ionAuth->login($username, $password)) {
                    // Успешная авторизация
                    return redirect()->to('/dashboard');
                } else {
                    $data['error'] = $ionAuth->errors();
                }
            } else {
                // Валидация не удалась, передаем ошибки в представление
                $data['validation'] = $validation;
            }
        }

        return view('auth/login', $data);
    }

    // ... другие методы, если необходимо


public function logout()
    {
        $ionAuth = new \IonAuth\Libraries\IonAuth();
        $ionAuth->logout();

        return redirect()->to('/');
    }
}
