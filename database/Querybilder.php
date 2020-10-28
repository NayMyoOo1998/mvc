<?php
$config = require "config.php";
class Queryblider
{
    public array $config;
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function connection()
    {
        try{
            return new PDO(
                $this->config['host'].';dbname='. $config['dbname'],
                $config['username'],
                $config['password'],
            );
        }
    }
}
