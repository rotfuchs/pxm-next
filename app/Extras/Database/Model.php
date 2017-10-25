<?php

namespace App\Extras\Database;

abstract class Model implements ModelInterface
{
    public function __construct(array $values = [])
    {
        $this->setValues($values);
    }

    public function setValues($values)
    {
        $fields = array_keys($this->toArray());

        foreach($values as $name => $value) {
            if(property_exists($this, $name) && in_array($name, $fields))
                $this->$name = $value;
        }
    }

    public function toArray()
    {
        return call_user_func('get_object_vars', $this);
    }

    public static function hydrate(array $data)
    {
        $className =  get_called_class();

        $result = [];
        foreach($data as $row)
            $result[] = new $className((is_array($row)) ? $row : get_object_vars($row));


        return $result;
    }
}