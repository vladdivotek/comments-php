<?php

namespace App\Models;

use PDO;

class Comment
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function createComment($user_id, $message)
    {
        $stmt = $this->db->prepare("INSERT INTO comments (user_id, message) VALUES (:user_id, :message)");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':message', $message);
        return $stmt->execute();
    }

    // Другие методы для работы с комментариями
}
