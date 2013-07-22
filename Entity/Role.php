<?php

/**
 * This file is part of the pantarei/user-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Pantarei\User\Model\RoleInterface;

/**
 * Role
 *
 * @ORM\MappedSuperclass(repositoryClass="Pantarei\Bundle\UserBundle\Entity\RoleRepository")
 */
class Role implements RoleInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    protected $role;

    /**
     * Set role
     *
     * @param string $role
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
