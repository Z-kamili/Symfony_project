<?php 

namespace App\Controller;

use PhpParser\Builder\Method;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{


       #[Route('/api/songs/{id<\d+>}', methods:['GET'])]
       public function getSongs(int $id, LoggerInterface $looger) : Response
       {

           $song = [

            'id' => $id,
            'name' => 'Waterfalls',
            'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',

           ];

           $looger->info('Returning API response for song {song}',[

            'song' => $id,

           ]);

           return $this->json($song);

       }



}