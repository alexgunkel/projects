<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 13:23
 */

namespace AlexGunkel\Value;


class DbDatabase
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return $this->name;
    }
}