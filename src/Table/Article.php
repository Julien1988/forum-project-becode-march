<?php

namespace App\Table;

class Article
{

    public function __get($key)
    {
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }
    public function getId()
    {
        return $this->id;
    }

    public function getContent()
    {
        return '<p>' . $this->content . '</p>';
    }
    public function getAuthor()
    {
        return $this->name;
    }
}
