<?php
namespace Jean\Utils;

class Hello
{
    private $name;
    public function __construct($name = 'World')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function hello()
    {
        return 'Hello ' . $this->name . '!';
    }

    public function debug($data = [])
    {
        if (is_array($data) || is_object($data)) {
            echo "<pre>";
            var_dump($data);
            echo "</pre>";
        } else {
            echo "<pre>{$data}</pre>";
        }
    }
}
