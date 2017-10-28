<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 10:24
 */

namespace AlexGunkel\Entities;


use AlexGunkel\Traits\Identifier;
use AlexGunkel\Value\ProjectTitle;

/**
 * Class Project
 * @package AlexGunkel\Entities
 *
 * @Entity @Table(name="projects")
 */
class Project
{
    use Identifier;

    /**
     * @var ProjectTitle
     * @Embedded(class = "AlexGunkel\Value\ProjectTitle", columnPrefix = false)
     */
    private $title;

    /**
     * @var Topic
     *
     * @ManyToOne(targetEntity="\AlexGunkel\Entities\Topic")
     * @JoinColumn(name="topic_id", referencedColumnName="id")
     */
    private $topic;

    /**
     * @var WskElement
     *
     * @ManyToOne(targetEntity="\AlexGunkel\Entities\WskElement")
     * @JoinColumn(name="wsk_element_id", referencedColumnName="id")
     */
    private $wskElement;

    /**
     * @return WskElement
     */
    public function getWskElement(): WskElement
    {
        return $this->wskElement;
    }

    /**
     * @param WskElement $wskElement
     * @return Project
     */
    public function setWskElement(WskElement $wskElement): Project
    {
        $this->wskElement = $wskElement;
        return $this;
    }

    /**
     * @return Topic
     */
    public function getTopic(): Topic
    {
        return $this->topic;
    }

    /**
     * @param Topic $topic
     * @return Project
     */
    public function setTopic(Topic $topic): Project
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * @return ProjectTitle
     */
    public function getTitle(): ProjectTitle
    {
        return $this->title ?: $this->title = new ProjectTitle('');
    }

    /**
     * @param ProjectTitle $title
     * @return Project
     */
    public function setTitle(ProjectTitle $title): Project
    {
        $this->title = $title;
        return $this;
    }

    public function __toString(): string
    {
        return $this->getTitle();
    }
}