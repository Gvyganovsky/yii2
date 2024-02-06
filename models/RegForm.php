<?php

namespace app\models;

use Yii;

use app\models\Users;

class RegForm extends Users
{
    public $passwordConfirm;
    public $agree;

    public function rules()
    {
        return [
            [['first_name', 'last_name', 'username', 'email', 'password', 'passwordConfirm'], 'required', 'message' => 'Обязательное поле'],
            ['first_name','string','max' => 50],
            [
                ['first_name'], 
                'match', 
                'pattern' => '/^[А-Яа-яЁё\s\-]+$/u', 
                'message' => 'Допустимы только кириллические символы, пробелы и тире.',
            ],
            [
                ['last_name'], 
                'match', 
                'pattern' => '/^[А-Яа-яЁё\s\-]+$/u', 
                'message' => 'Допустимы только кириллические символы, пробелы и тире.'
            ],
            [
                ['patronymic'], 
                'match', 
                'pattern' => '/^[А-Яа-яЁё\s\-]+$/u', 
                'message' => 'Допустимы только кириллические символы, пробелы и тире.',
            ],
            [
                ['username'],
                'match',
                'pattern' => '/^[A-Za-z0-9]{5,}$/',
                'message' => 'Используйте минимум 5 латинских букв или цифр'
            ],
            [
                ['password'],
                'match',
                'pattern' => '/^[A-Za-z0-9]{5,}$/',
                'message' => 'Используйте минимум 5 латинских букв или цифр'
            ],
            [['email'], 'email'],
            [
                ['passwordConfirm'],
                'compare',
                'compareAttribute' => 'password'
            ],
            [['email', 'username'], 'unique'],
            [
                ['agree'],
                'compare',
                'compareValue' => true,
                'message' => ''
            ],
            [['username', 'email', 'password'], 'string', 'max' => 255],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'patronymic' => 'Отчество',
            'username' => 'Логин',
            'email' => 'Адрес электронной почты',
            'password' => 'Пароль',
            'passwordConfirm' => 'Повторите пароль',
            'agree' => 'Подтвердите согласие на обработку персональных данных',
        ];
    }
}