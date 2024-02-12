<?php

namespace App\Controllers;

use App\Models\Comment;

class CommentController
{
    public function create()
    {
        return view('comment.create');
    }

    public function store()
    {
        // Проверка CSRF-токена
        if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
            // Обработка ошибки
        }

        // Получаем данные из формы
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Здесь можно добавить валидацию данных

        // Создаем новый комментарий в базе данных
        $comment = new Comment();
        // Предположим, что у вас есть метод createComment($user_id, $message) в модели Comment
        $comment->createComment($name, $email, $message);

        // Перенаправляем пользователя после успешного добавления комментария
        header('Location: /comments/success');
        exit();
    }
}