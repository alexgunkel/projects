<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 11:09
 */

namespace AlexGunkel\Entities;


use AlexGunkel\Value\TopicTitle;

class Topic
{
    /**
     * @var TopicTitle
     */
    private $title;

    /**
     * @return TopicTitle
     */
    public function getTitle(): TopicTitle
    {
        return $this->title;
    }

    /**
     * @param TopicTitle $title
     * @return WskElement
     */
    public function setTitle(TopicTitle $title): Topic
    {
        $this->title = $title;
        return $this;
    }
}