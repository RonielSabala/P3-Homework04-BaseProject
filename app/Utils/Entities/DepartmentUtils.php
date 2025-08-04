<?php

namespace App\Utils\Entities;

use PDO;
use App\Utils\GeneralUtils;


class DepartmentUtils
{
    static private $getAllSQL = "SELECT * FROM departments";
    static private $getSQL = "SELECT * FROM departments WHERE id = ?";
    static private $deleteSQL = "DELETE FROM departments WHERE id = ?";
    private static $updateSQL = "UPDATE departments
    SET
        dept_name     = ?,
        faculty_head  = ?,
        email         = ?
    WHERE
        id = ?";

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
        $dept = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$dept) {
            GeneralUtils::showAlert('No se encontró el departamento.', 'danger');
            return false;
        }

        return $dept;
    }

    public static function update($fields)
    {
        global $pdo;

        $stmt = $pdo->prepare(self::$updateSQL);
        $stmt->execute($fields);
    }

    public static function delete($id)
    {
        return GeneralUtils::executeSql(self::$deleteSQL, [$id]);
    }
}
