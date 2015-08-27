<?php

namespace FlyBundle\WebClient;

use GuzzleHttp\ClientInterface;

/**
 * SkyScanner Client.
 *
 * @author Thibault
 */
class SkyScannerClient
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param ClientInterface $client
     * @param string          $token
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves product's data form Prestashop.
     *
     * @param  string  $qrCode The product QR code.
     * @return Product
     */
    public function retrieveAirports($name)
    {
        $json = $this->client->get('/dataservices/geo/v1.1/autosuggest/UK/fr-FR/'.$name)->json();
        return $json;
    }
    
    
    
}
