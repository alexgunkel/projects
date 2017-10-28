<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 13:19
 */

namespace AlexGunkel\Value;


class DbUserName
{
    private $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function __toString(): string
    {
        return $this->username;
    }
}