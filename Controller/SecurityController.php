<?php

/**
 * This file is part of the pantarei/user-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request
                ->attributes
                ->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        } else {
            $error = $session
                ->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        }

        return $this->render('PantareiUserBundle:Security:login.html.twig', array(
            'error' => $error,
            'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
        ));
    }
}

