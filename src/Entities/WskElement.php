<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 11:09
 */

namespace AlexGunkel\Entities;


use AlexGunkel\Value\WskTitle;

/**
 * Class WskElement
 * @package AlexGunkel\Entities
 *
 * @Entity @Table(name="wsk_elements")
 */
class WskElement
{
    /**
     * @var integer
     * @Id @Column(type="integer") @GeneratedValue
     */
    private $id;

    /**
     * @var WskTitle
     * @Embedded(class="AlexGunkel\Value\WskTitle", columnPrefix=false)
     */
    private $title;

    /**
     * @return WskTitle
     */
    public function getTitle(): WskTitle
    {
        return $this->title;
    }

    /**
     * @param WskTitle $title
     * @return WskElement
     */
    public function setTitle(WskTitle $title): WskElement
    {
        $this->title = $title;
        return $this;
    }

    public function __toString(): string
    {
        return $this->getTitle();
    }
}