<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController 
{
    #[Route('/')]
    public function homepage() 
    {
        return new Response('Title: PB and Jams');
    }

    /**
     * Wildcard route
     */
    #[Route('/browse/{slug}')]
    public function browse(string $slug) : Response 
    {
        $title = str_replace('-',' ',$slug);
        return new Response('Genre: '.$title);
    }
}