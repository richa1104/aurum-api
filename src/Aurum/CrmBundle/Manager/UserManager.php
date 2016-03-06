<?php

namespace Aurum\CrmBundle\Manager;

use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;

class UserManager
{
    protected $doctrine;

    public function __construct(Doctrine $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function loadAll()
    {
        
        $er = $this->doctrine->getManager()->getRepository('AurumCrmBundle:User');
        
        return $er->retrieve(1);
        
    }
}