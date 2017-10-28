<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 11:09
 */

namespace AlexGunkel\Entities;


use AlexGunkel\Traits\Identifier;
use AlexGunkel\Value\TopicTitle;

/**
 * Class Topic
 * @package AlexGunkel\Entities
 *
 * @Entity @Table(name="topics")
 */
class Topic
{
    use Identifier;

    /**
     * @var TopicTitle
     * @Embedded(class="AlexGunkel\Value\TopicTitle", columnPrefix=false)
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

    public function __toString(): string
    {
        return $this->getTitle();
    }
}