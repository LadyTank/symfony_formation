<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ChanceController
{
    public function getNumber() {
        $number = rand(0,100);
        return new Response("
        <html>
        <body>
        <div>Le numéro de la chance est $number</div>
        </body>
        </html>") ;
    }
}
