<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 10:25
 */

namespace AlexGunkel\Value;

/**
 * Class ProjectTitle
 * @package AlexGunkel\Value
 *
 * @Embeddable
 */
class ProjectTitle
{
    /**
     * @var string
     * @Column(type="string")
     */
    private $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function __toString(): string
    {
        return $this->title;
    }
}