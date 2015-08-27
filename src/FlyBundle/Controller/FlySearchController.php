<?php
namespace FlyBundle\Controller;
use Dunglas\ApiBundle\JsonLd\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use FlyBundle\Entity\FlySearch;
use FlyBundle\Entity\SubFlySearch;

/**
 * Handles batch uploads.
 *
 * @Route("/api/fly_searches")
 *
 * @author Thibault
 */
class FlySearchController extends Controller
{
    /**
     * Get Airports
     *
     * @param Request $request
     * 
     * @Route("/create")
     * 
     * @return Response
     */
    public function createAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        if (!is_array($data)) {
            return new Response(null, 400);
        }
        
        $search = new FlySearch();
        $entityManager = $this->getDoctrine()->getEntityManager();
        $search->setNbAdults($data['nbAdults']);
        $search->setNbChildren($data['nbChildren']);
        $entityManager->persist($search);
        $airportRepositery = $entityManager->getRepository('FlyBundle:Airport');
        
        foreach ($data['arrivals'] as $arrivalFullId) {
            $subFlySearch = new SubFlySearch();
            $subFlySearch->setFlySearch($search);
            $departureId = substr( $data['departure'], strrpos( $data['departure'],'/')+1, strlen( $data['departure'] ) );
            $departure = $airportRepositery->find($departureId);
            $arrivalId = substr( $arrivalFullId, strrpos( $arrivalFullId,'/')+1, strlen( $arrivalFullId ) );
            $arrival = $airportRepositery->find($arrivalId);
            $subFlySearch->setDeparture($departure);
            $subFlySearch->setArrival($arrival);
            $subFlySearch->setDepartureDate($data['departureDate']);
            $subFlySearch->setArrivalDate($data['arrivalDate']);
            $entityManager->persist($subFlySearch);
        }

        $entityManager->flush();
        
        return new Response('OK');
    }
}