<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 13:21
 */

namespace AlexGunkel\Value;


class DbPassword
{
    private $password;

    public function __construct(string $passwd)
    {
        $this->password = $passwd;
    }

    public function __toString(): string
    {
        return $this->password;
    }
}