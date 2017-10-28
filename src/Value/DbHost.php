<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 13:22
 */

namespace AlexGunkel\Value;


class DbHost
{
    private $host;

    public function __construct(string $host)
    {
        $this->host = $host;
    }

    public function __toString(): string
    {
        return $this->host;
    }
}