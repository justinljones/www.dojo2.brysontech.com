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
    
    /**
     * @Route("admin/add_student", name="admin/add_student")
     */
    public function addNewStudentAction(Request $request)
    {        
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare(""
                . "INSERT INTO students (name, age, birthday, rank)"
                . "VALUES (:student_name, :student_age, :student_birthdate, :student_rank)");
        
        $statement->bindValue('student_name', $_POST['student_name']);        
        $statement->bindValue('student_age', $_POST['student_age']);
        $statement->bindValue('student_birthdate', $_POST['student_birthdate']);
        $statement->bindValue('student_rank', $_POST['student_rank']);
        
        $statement->execute();
        
        
        return $this->render('Admin/Student/index.html.twig');
    }
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

