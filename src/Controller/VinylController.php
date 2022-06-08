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
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];

        

        return $this->render('vinyl/homepage.html.twig',[
            'title' => 'PB & cool',
            'tracks' =>  $tracks
        ]);

        
    }


    
    /**
     * Wildcard route
     */
    #[Route('/browse/{slug}',name: 'app_browser')]
    public function browse(string $slug = null) : Response 
    {

        $genre = $slug ? str_replace('-',' ',$slug) : null;

        return $this->render('vinly/browse.html.twig',[

            'genre' => $genre

        ]);


        return new Response('hello');


    }
}