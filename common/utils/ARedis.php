<?php
namespace common\utils;

class ARedis
{
    private $_redis;
    private $host = '192.168.1.247';
    private $port = 6379;
    private $password = 'august';
    private $database = 12;
    private static $instance = null;

    protected function __construct($persistent)
    {
        echo 'test ';
        $redis = new \Redis();

        if ($persistent) {
            $redis->pconnect($this->host, $this->port);
        } else {
            $redis->connect($this->host, $this->port);
        }
        if ($this->password) {
            $redis->auth($this->password);
        }

        $redis->select($this->database);

        $this->_redis = $redis;
    }

    /**
     * author: august 2020/11/4
     * @param bool $persistent
     * @return \Redis ARedis
     */
    public static function getInstance($persistent = false)
    {
        if (self::$instance === null) {
            self::$instance = new static($persistent);
        }

        return self::$instance;
    }

    public function __call($name, $arguments)
    {
        // var_dump($name, $arguments);die;
        return $this->_redis->$name(...$arguments);
    }

    public function __destruct()
    {
        $this->_redis && $this->_redis->close();
    }

    final function __clone()
    {
    }
}