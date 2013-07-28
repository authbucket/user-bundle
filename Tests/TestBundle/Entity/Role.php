<?php

/**
 * This file is part of the pantarei/user-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\UserBundle\Tests\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Pantarei\Bundle\UserBundle\Entity\Role as AbstractRole;

/**
 * Role
 *
 * @ORM\Table(name="test_role")
 * @ORM\Entity(repositoryClass="Pantarei\Bundle\UserBundle\Tests\TestBundle\Entity\RoleRepository")
 */
class Role extends AbstractRole
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
