<?php

namespace Aurum\CrmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



/**
 * Sessions Controller
 *
 * @Route("api/users")
 */
class UsersController extends Controller
{
     /**
     * Get Users
     *
     * @Route(".{_format}", name="get_users", defaults={ "_format"="json"})
     * @Method("GET")
     *
     * @return array
     */
    public function getUsersAction()
    {
       
        $userManager = $this->get('aurum_api.user_manager');
        $users = array('users' => $userManager->loadAll());
        $response = new Response(json_encode($users));
        $response->headers->set('Content-Type', 'application/json');

        var_dump($userManager->loadAll());die;
        return $response;
    }
}
