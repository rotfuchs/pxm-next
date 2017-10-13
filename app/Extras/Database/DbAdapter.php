<?php

namespace App\Extras\Database;

use Illuminate\Support\Facades\DB;

class DbAdapter
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = DB::getPdo();
    }

    /**
     * @param $tableName
     * @return \Illuminate\Database\Query\Builder
     */
    public function table($tableName)
    {
        return Db::table($tableName);
    }

    /**
     * @param $statement
     * @param Model $classDefinition
     *
     * @return array
     */
    public function fetchAll($statement, Model $classDefinition)
    {
        $std = $this->pdo->prepare($statement);
        $std->execute();

        return $std->fetchAll(\PDO::FETCH_CLASS, $classDefinition);
    }
}