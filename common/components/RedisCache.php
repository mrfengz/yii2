<?php
namespace common\components;

class RedisCache extends \yii\caching\Cache
{
    /**
     * @var \Redis $_cache;
     */
    protected $_cache;

    public function init()
    {
        parent::init();
        $this->initRedis();
    }

    public $host = '127.0.0.1';
    public $port = 6379;
    public $persistent = false;
    public $selectDb = 1;
    public $auth = '';

    private function initRedis()
    {
        if ($this->_cache === null) {
            $redis = new \Redis();
            if ($this->persistent) {
                $redis->pconnect($this->host, $this->port);
            } else {
                $redis->connect($this->host, $this->port);
            }
            if ($this->auth) {
                $redis->auth($this->auth);
            }
            $this->_cache = $redis;
        }
        if (!$this->_cache instanceof \Redis) {
            throw new \yii\base\InvalidConfigException('Cache Redis configure is invalid!');
        }
        $this->_cache->select($this->selectDb);
    }

    public function getValue($key)
    {
        return $this->_cache->get($key);
    }

    public function setValue($key, $value, $duration = 0)
    {
        if ($duration==0) {
            return $this->_cache->set($key, $value);
        }

        return $this->_cache->setex($key, $duration, $value);
    }

    public function addValue($key, $value, $duration)
    {
        return $this->setValue($key, $value, $duration);
    }

    public function deleteValue($key)
    {
        if (method_exists($this->_cache, 'del')) {
            return $this->_cache->del($key);
        } elseif (method_exists($this->_cache, 'delete')) {
            return $this->_cache->delete($key);
        }
    }

    public function flushValues()
    {
        return $this->_cache->flushDB();
    }

    public function __destruct()
    {
        $this->_cache && $this->_cache->close();
    }
    // public function __call($name, $params)
    // {
    //     return $this->_cache->$name($params);
    // }
}