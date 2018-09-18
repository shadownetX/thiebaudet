<?php

/**
 * This file is part of the Aero package.
 *
 * (c) Aerocontact Group <thomas@thiebaudet.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{

    /**
     * @Route("/")
     */
    public function testAction(EntityManagerInterface $em)
    {
        $response = new Response("<html><body>Hello World!</body></html>");

        $em->getConnection()->connect();
        $connected = $em->getConnection()->isConnected();

        dump($connected);

        return $response;
    }

}