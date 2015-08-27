<?php
namespace FlyBundle\Controller;
use Dunglas\ApiBundle\JsonLd\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Handles batch uploads.
 *
 * @Route("/api")
 *
 * @author Thibault
 */
class AirportController extends Controller
{
    /**
     * Get Airports
     *
     * @param Request $request
     * 
     * @Route("/suggest/airports")
     * 
     * @return Response
     */
    public function getAction(Request $request)
    {
        $name = $request->query->get('name');
        
        $json ='';

        
        if (isset($name)) {
            $json = $this->get('skyscanner_client')->retrieveAirports($name);
        }
        else
        {
            $json = "bob";
        }
        
        return new Response($json);
        
    }
}