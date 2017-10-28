<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 10:25
 */

namespace AlexGunkel\Value;

/**
 * Class RegionName
 * @package AlexGunkel\Value
 *
 * @Embeddable
 */
class RegionName
{
    /**
     * @var string
     * @Column(type="string")
     */
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