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

use Doctrine\ORM\EntityManager;
use Pantarei\User\Exception\ServerErrorException;
use Pantarei\User\Model\ModelManagerFactoryInterface;
use Pantarei\User\Model\ModelManagerInterface;

/**
 * User model manager factory implemention.
 *
 * @author Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 */
class ModelManagerFactory implements ModelManagerFactoryInterface
{
    protected $managers;

    public function __construct(EntityManager $em, array $models = array())
    {
        $managers = array();
        foreach ($models as $type => $model) {
            $manager = $em->getRepository($model);
            if (!$manager instanceof ModelManagerInterface) {
                throw new ServerErrorException();
            }
            $managers[$type] = $manager;
        }

        $this->managers = $managers;
    }

    public function getModelManager($type)
    {
        if (!isset($this->managers[$type])) {
            throw new ServerErrorException();
        }

        return $this->managers[$type];
    }
}
