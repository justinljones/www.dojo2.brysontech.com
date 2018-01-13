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
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Homepage/Index/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
     /**
     * @Route("/about_us", name="about_us")
     */
    public function indexAboutUs(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('About_Us/Index/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/programs", name="programs")
     */
    public function indexPrograms(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Programs/Index/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/class_schedules", name="class")
     */
    public function indexClassSchedules(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Class_Schedules/Index/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/the_store", name="store")
     */
    public function indexTheStore(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Store/Index/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/news", name="news")
     */
    public function indexNews(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('News/Index/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/contact_us", name="contact")
     */
    public function indexContactUs(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Contact_Us/Index/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    
}
