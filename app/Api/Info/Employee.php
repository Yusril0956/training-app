<?php

namespace App\Api\Info;

class Employee extends Info
{
    protected static $uri = "/general/employee";

    public static function all($query = [])
    {
        return self::get(self::$uri, $query, []);
    }

    public static function find($id)
    {
        return self::get(self::$uri, ['nik' => $id]);
    }

    public static function findBy($key, $value)
    {
        return self::get(self::$uri, [$key => $value]);
    }
}
