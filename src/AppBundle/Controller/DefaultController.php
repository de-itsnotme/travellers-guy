<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Airports;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/registera", name="registera")
     */
    public function registeraAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/register.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/logina", name="logina")
     */
    public function loginaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/login.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/getAirports")
     */
    public function getAirportsAction(Request $request)
    {

        $value = $request->query->get('getAirports');

        $airports = $this->getDoctrine()
            ->getRepository('AppBundle:Airports')
            ->createQueryBuilder('A')
            ->select(array('A.name', 'A.airlineId'))
            ->where('A.name LIKE :name')
            ->setParameter('name','%'.$value.'%')
            ->setMaxResults(8)
            ->getQuery()
            ->getArrayResult();
        return $this->json($airports);
    }
}
