<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
   }
   #[Route('/tt',name:'zaaa')]
   function test(){
    return new Response("Bonjour <i> 3A14 3A13</i>");
   }
#[Route('ttt')]
function test2(){
    return $this->render('test2.html.twig',[]);
}
#[Route('tttt/{classe}')]
function test3($classe){
    return $this->render('test3.html.twig',['c'=>$classe]);
    
}
#[Route('/liste')]
function list(){
    $formations = array(

        array('ref' => 'form147', 'Titre' => 'Formation
    Symfony 4','Description'=>'formation pratique',
    
            'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020', 'nb_participants'=>19) ,
    
        array('ref'=>'form177','Titre'=>'Formation
    SOA' ,
    
            'Description'=>'formation theorique','date_debut'=>'03/12/2020','date_fin'=>'10/12/2020',
    
            'nb_participants'=>0),
    
        array('ref'=>'form178','Titre'=>'Formation
    Angular' ,
    
            'Description'=>'formation theorique','date_debut'=>'10/06/2020','date_fin'=>'14/06/2020',
    
            'nb_participants'=>12));
            return $this->render('teacher/list.html.twig',['formation'=>$formations]);

}


}

