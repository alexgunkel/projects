<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 28.10.17
 * Time: 12:10
 */

namespace AlexGunkel\Traits;


trait Identifier
{
    /**
     * @var integer
     * @Id @Column(type="integer") @GeneratedValue
     */
    private $uid;

    public function getUid(): int
    {
        return $this->uid;
    }
}