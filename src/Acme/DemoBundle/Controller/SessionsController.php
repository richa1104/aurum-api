<?php

namespace Acme\DemoBundle\Controller;

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
 * @Route("api/sessions")
 */
class SessionsController extends Controller
{
    
     /**
     * Get Sessions
     *
     * @Route(".{_format}", name="get_sessions", defaults={ "_format"="json"})
     * @Method("GET")
     *
     * @return array
     */
    public function getSessionsAction()
    {var_dump('hehe');
        $categorias = array('crms' => array());
        $response = new Response(json_encode($categorias));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

}
