<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Project;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
    	$repository = $this->getDoctrine()->getRepository(Project::class);
    	return $this->render('home/index.html.twig', [
            'projects' => $repository->findAll(),
        ]);
    }
}
