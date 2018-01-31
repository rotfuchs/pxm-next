<?php

namespace App\Extras\Database;

use Illuminate\Database\Query\Builder;
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
     * @param \Illuminate\Database\Query\Builder|string $statement
     * @param string $classDefinition
     *
     * @return array
     */
    public function fetchAll($statement, $classDefinition)
    {
        if($statement instanceof Builder) {
            return $classDefinition::hydrate($statement->get()->toArray());
        }

        $std = $this->pdo->prepare($statement->toSql());
        $std->execute();

        return $std->fetchAll(\PDO::FETCH_CLASS, $classDefinition);
    }

    /**
     * @param \Illuminate\Database\Query\Builder|string $statement
     * @return mixed
     */
    public function fetchRow($statement) {
        $std = $this->pdo->prepare($statement->toSql());
        $std->execute();

        return $std->fetch(\PDO::FETCH_ASSOC);
    }
}