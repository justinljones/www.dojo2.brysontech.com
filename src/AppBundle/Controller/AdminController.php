<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
/**
     * @Route("/admin", name="admin")
     */
    public function indexAdmin()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, "Unable to access this Page");
        return $this->render("Admin/index.html.twig");     
        
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

