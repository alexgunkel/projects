<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 13:29
 */

namespace AlexGunkel\Test;


use AlexGunkel\DatabaseConfiguration;
use AlexGunkel\Value\DbDatabase;
use AlexGunkel\Value\DbHost;
use AlexGunkel\Value\DbPassword;
use AlexGunkel\Value\DbUserName;
use PHPUnit\Framework\TestCase;

class DatabaseConfigurationTest extends TestCase
{
    public function testConfig()
    {
        $config = new DatabaseConfiguration;
        $config->setDatabase(new DbDatabase('db_name'))
            ->setHost(new DbHost('localhost'))
            ->setUser(new DbUserName('root'))
            ->setPassword(new DbPassword('very_secure'));

        $confArray = $config->asArray();
        self::assertEquals(
            'db_name',
            $confArray['dbname']
        );

        self::assertEquals(
            'root',
            $confArray['user']
        );

        self::assertEquals(
            'localhost',
            $confArray['host']
        );

        self::assertEquals(
            'very_secure',
            $confArray['password']
        );
    }
}