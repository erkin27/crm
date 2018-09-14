<?php

namespace Engine\Core\Database;

class Connection
{
    /**
     * @var $link \PDO
     */
    private $link;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $config = require_once __DIR__ . '/../../Config/db.php';
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];

        $this->link = new \PDO($dsn, $config['username'], $config['password']);

        return $this;
    }

    /**
     * @param $sql
     * @return bool
     */
    public function execute($sql)
    {
        /**
         * @var $stn \PDOStatement
         */
        $stn = $this->link->prepare($sql);

        return $stn->execute();
    }

    /**
     * @param $sql
     * @return array
     */
    public function query($sql)
    {
        $stn = $this->link->prepare($sql);

        $stn->execute();

        $result = $stn->fetchAll(\PDO::FETCH_ASSOC);

        return $result === false ? [] : $result;
    }
}