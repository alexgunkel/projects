<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 29.10.17
 * Time: 14:24
 */

namespace AlexGunkel\Value;

/**
 * Class Description
 * @package AlexGunkel\Value
 *
 * @Embeddable
 */
class Description
{
    /**
     * @var string
     * @Column(type="string")
     */
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function __toString(): string
    {
        return $this->content;
    }
}