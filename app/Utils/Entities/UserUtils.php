<?php

namespace App\Utils\Entities;

use PDO;


class UserUtils
{
    static private $userPasswordSql = "SELECT * FROM students WHERE username = ?";

    public static function getUserByName($username)
    {
        global $pdo;

        $stmt = $pdo->prepare(self::$userPasswordSql);
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
