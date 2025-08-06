<?php

namespace App\Utils\Entities;

use PDO;
use App\Utils\GeneralUtils;


class DepartmentUtils
{
    static private $getAllSQL = "SELECT * FROM departments";
    static private $getSQL = "SELECT * FROM departments WHERE id = ?";
    static private $getByNameSQL = "SELECT * FROM departments WHERE dept_name = ?";
    private static $createSQL = "INSERT INTO departments (
        dept_name,
        faculty_head,
        email
    ) VALUES (
        ?, ?, ?
    )
    ";
    private static $updateSQL = "UPDATE departments
    SET
        dept_name     = ?,
        faculty_head  = ?,
        email         = ?
    WHERE
        id = ?";
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
        $dept = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$dept) {
            GeneralUtils::showAlert('No se encontró el departamento.', 'danger');
            return false;
        }

        return $dept;
    }

    public static function getByName($dept_name)
    {

        global $pdo;

        $stmt = $pdo->prepare(self::$getByNameSQL);
        $stmt->execute([$dept_name]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($fields)
    {
        return GeneralUtils::executeSql(self::$createSQL, $fields);
    }

    public static function update($fields)
    {
        return GeneralUtils::executeSql(self::$updateSQL, $fields);
    }

    public static function delete($id)
    {
        return GeneralUtils::executeSql(self::$deleteSQL, [$id]);
    }
}
