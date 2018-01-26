<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('Homepage/Index/index.html.twig');
    }
    
     /**
     * @Route("/about_us", name="about_us")
     */
    public function indexAboutUs()
    {
        return $this->render('About_Us/Index/index.html.twig');
    }
    
    /**
     * @Route("/programs", name="programs")
     */
    public function indexPrograms()
    {
        return $this->render('Programs/Index/index.html.twig');
    }
    
    /**
     * @Route("/class_schedules", name="class")
     */
    public function indexClassSchedules()
    {
        return $this->render('Class_Schedules/Index/index.html.twig');
    }
    
    /**
     * @Route("/the_store", name="store")
     */
    public function indexTheStore()
    {
        return $this->render('Store/Index/index.html.twig');
    }
    
    /**
     * @Route("/news", name="news")
     */
    public function indexNews()
    {
        return $this->render('News/Index/index.html.twig');
    }
    
    /**
     * @Route("/contact_us", name="contact")
     */
    public function indexContactUs()
    {
        return $this->render('Contact_Us/Index/index.html.twig');
    }
}
