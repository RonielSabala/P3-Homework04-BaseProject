<?php

namespace App\Utils\Entities;

use PDO;


class UserUtils
{
    static private $userPasswordSql = "SELECT * FROM students WHERE first_name = ?";

    public static function getUserPassByName($studentName)
    {
        global $pdo;

        $stmt = $pdo->prepare(self::$userPasswordSql);
        $stmt->execute([$studentName]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
