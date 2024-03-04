<?php

namespace App\Controller;

use App\Repository\LivresRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LivresController extends AbstractController
{
    #[Route('/livres', name: 'admin_livres')]
    public function index(LivresRepository $r): Response
    {
        $Livres = $r->findAll();
        // dd($Livres);
        return $this->render('livres/index.html.twig', [
            'livres' => $Livres,
        ]);
    }
    #[Route('/livres/show/{id}', name: 'admin_livres_show')]
    public function show(LivresRepository $r, $id): Response
    {
        $Livre = $r->find($id);
        // dd($Livre);
        return $this->render('livres/show.html.twig', [
            'livre' => $Livre,
        ]);
    }
}
