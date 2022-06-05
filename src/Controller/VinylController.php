<?php 

namespace App\Controller;

use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Routing\Annotation\Route;

class VinylController 
{
    #[Route('/')]
    public function homepage() 
    {
        return new HttpFoundationResponse('Title: PB and Jams');
    }
}