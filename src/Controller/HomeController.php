<?php

/**
 * @Author: OMAO
 * @Date:   2019-09-06 12:41:41
 * @Last Modified by:   OMAO
 * @Last Modified time: 2019-09-06 12:50:39
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
		return $this->redirectToRoute("workshop_list");
    }
}
