<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 11:09
 */

namespace AlexGunkel\Entities;


use AlexGunkel\Value\WskTitle;

class WskElement
{
    /**
     * @var WskTitle
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
}