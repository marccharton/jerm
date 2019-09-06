<?php

/**
 * @Author: OMAO
 * @Date:   2019-09-06 11:31:20
 * @Last Modified by:   OMAO
 * @Last Modified time: 2019-09-06 13:05:22
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\WorkshopRepository;
use App\Entity\Workshop;

class WorkshopController extends AbstractController
{
    /**
     * @Route("/workshop-list", name="workshop_list")
     */
    public function list(WorkshopRepository $workshopRepository)
    {
        $workshopList = $workshopRepository->findAll();

        return $this->render('workshop/index.html.twig', [
            'controller_name' => 'WorkshopController',
            'workshop_list' => $workshopList
        ]);
    }


    /**
     * @Route("/workshop-detail/{id<\d+>}", name="workshop_detail")
     */
    public function detail(Workshop $workshop)
    {
        return $this->render('workshop/detail.html.twig', [
            'workshop' => $workshop
        ]);
    }
}
