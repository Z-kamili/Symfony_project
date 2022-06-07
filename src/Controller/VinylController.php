<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{

    #[Route('/')]
    public function homepage() 
    {

        $tracks = [
            'Gangsta Paradise - Coolio',
            'Waterfalls -TLC',
            'Creep - Radiohead',
            'Kiss from a Rose - Seal',
            'Fantasy - Mariah Carey',
        ];

        

        return $this->render('vinyl/homepage.html.twig',[
            'title' => 'PB & cool',
            'tracks' =>  $tracks
        ]);
    }


    
    /**
     * Wildcard route
     */
    #[Route('/browse/{slug}')]
    public function browse() : Response 
    {

        return new Response('hello');


    }
}