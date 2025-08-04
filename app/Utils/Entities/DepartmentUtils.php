<?php

namespace App\Utils\Entities;

use PDO;
use App\Utils\GeneralUtils;


class DepartmentUtils
{
    static private $getAllSQL = "SELECT * FROM departments";
    static private $getSQL = "SELECT * FROM departments WHERE id = ?";
    static private $deleteSQL = "DELETE FROM departments WHERE id = ?";

    public static function getAll()
    {
        global $pdo;

        $stmt = $pdo->query(self::$getAllSQL);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function get($id)
    {

        global $pdo;

        $stmt = $pdo->prepare(self::$getSQL);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function delete($id)
    {
        return GeneralUtils::executeSql(self::$deleteSQL, [$id]);
    }
}
