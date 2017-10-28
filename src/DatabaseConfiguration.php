<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 13:18
 */

namespace AlexGunkel;


use AlexGunkel\Value\DbDatabase;
use AlexGunkel\Value\DbHost;
use AlexGunkel\Value\DbPassword;
use AlexGunkel\Value\DbUserName;

class DatabaseConfiguration
{
    /**
     * @var DbHost
     */
    private $host;

    /**
     * @var DbUserName
     */
    private $user;

    /**
     * @var DbPassword
     */
    private $password;

    /**
     * @var DbDatabase
     */
    private $database;

    /**
     * @return DbHost
     */
    public function getHost(): DbHost
    {
        return $this->host;
    }

    /**
     * @param DbHost $host
     * @return DatabaseConfiguration
     */
    public function setHost(DbHost $host): DatabaseConfiguration
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @return DbUserName
     */
    public function getUser(): DbUserName
    {
        return $this->user;
    }

    /**
     * @param DbUserName $user
     * @return DatabaseConfiguration
     */
    public function setUser(DbUserName $user): DatabaseConfiguration
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return DbPassword
     */
    public function getPassword(): DbPassword
    {
        return $this->password;
    }

    /**
     * @param DbPassword $password
     * @return DatabaseConfiguration
     */
    public function setPassword(DbPassword $password): DatabaseConfiguration
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return DbDatabase
     */
    public function getDatabase(): DbDatabase
    {
        return $this->database;
    }

    /**
     * @param DbDatabase $database
     * @return DatabaseConfiguration
     */
    public function setDatabase(DbDatabase $database): DatabaseConfiguration
    {
        $this->database = $database;
        return $this;
    }

    public function asArray()
    {
        return [
            'driver'   => 'pdo_mysql',
            'host'     =>  $this->host,
            'user'     =>  $this->user,
            'password' =>  $this->password,
            'dbname'   =>  $this->database,
        ];
    }
}