<?php

namespace App\Extras\Database;

class Select
{
    private $from;
    private $wheres = [];

    public function select()
    {
        return $this;
    }

    /**
     * The name of the table can be an array or string
     *
     * String: "users" or "users as u"
     * Array: ["users"] or ["u" => "users]
     *
     * @param string|array $tableName
     * @return $this
     */
    public function from($tableName)
    {
        if(is_string($tableName))
            $this->from = $tableName;

        if(is_array($tableName) && count($tableName)==1) {
            $name = current($tableName);
            $alias = key($tableName);

            $this->from = $name;

            if(is_string($alias) && strlen($alias)>0)
                $this->from .= ' AS ' . $alias;
        }

        return $this;
    }

    public function join($tableName, $condition)
    {
        return $this;
    }

    public function leftJoin()
    {
        return $this;
    }

    public function rightJoin()
    {
        return $this;
    }

    public function where()
    {
        return $this;
    }

    public function order()
    {
        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.

        return '';
    }

}