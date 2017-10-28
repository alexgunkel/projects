<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 10:24
 */

namespace AlexGunkel\Entities;


use AlexGunkel\Value\ProjectTitle;

/**
 * Class Project
 * @package AlexGunkel\Entities
 *
 * @Entity @Table(name="projects")
 */
class Project
{
    /**
     * @var integer
     * @Id @Column(type="integer") @GeneratedValue
     */
    private $id;

    /**
     * @var ProjectTitle
     */
    private $title;

    /**
     * @return ProjectTitle
     */
    public function getTitle(): ProjectTitle
    {
        return $this->title;
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

}