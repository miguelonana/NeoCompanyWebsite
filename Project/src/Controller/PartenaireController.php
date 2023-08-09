<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Patenaire; 
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Routing\Annotation\Route;
class PartenaireController extends AbstractController
{
    #[Route('/partenaire/controlleur', name: 'app_partenaire_controlleur')]

    public function index(): Response
    {
        return $this->render('partenaire_controlleur/index.html.twig', [
            'controller_name' => 'PartenaireController',
        ]);
    }
    #[Route('/showpartenaireDetail/{id}', name: 'showpartenaireDetail')]
    public function showpartenaireDetail(ManagerRegistry $doctrine,$id, Request $request): Response
    {
        $partenaire = $doctrine->getRepository(Patenaire::class)->find($id);



        return $this->render('partenaire_controlleur/index.html.twig',[
            'partenaire' => "ok", 
            'part'=> $partenaire

        ]);



    }

}
