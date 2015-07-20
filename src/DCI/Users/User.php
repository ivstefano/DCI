<?php
/**
 * Created by Ivo Stefanov
 * Date: 5/1/15
 * Time: 2:32 AM
 */

namespace DCI\Users;

class User
{
    private $id;
    private $name;
    private $type;

    public function __construct($id, $name, $type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }
}