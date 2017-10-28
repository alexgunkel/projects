<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 12:05
 */

namespace AlexGunkel\Entities;

use AlexGunkel\Traits\Identifier;
use AlexGunkel\Value\RegionName;

/**
 * Class Region
 * @package AlexGunkel\Entities
 *
 * @Entity @Table(name="regions")
 */
class Region
{
    use Identifier;

    /**
     * @var RegionName
     * @Embedded(class="AlexGunkel\Value\RegionName", columnPrefix = false)
     */
    private $name;

    /**
     * @return RegionName
     */
    public function getName(): RegionName
    {
        return $this->name;
    }

    /**
     * @param RegionName $name
     * @return Region
     */
    public function setName(RegionName $name): Region
    {
        $this->name = $name;
        return $this;
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}