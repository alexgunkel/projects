<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 29.10.17
 * Time: 14:29
 */

namespace AlexGunkel\Value;

/**
 * Class Link
 * @package AlexGunkel\Value
 *
 * @Embeddable
 */
class Link
{
    /**
     * @var string
     * @Column(type="string")
     */
    private $url;

    public function __construct(string $link)
    {
        $this->url = $link;
    }

    public function __toString(): string
    {
        return $this->url;
    }
}