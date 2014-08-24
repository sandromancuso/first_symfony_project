<?php

namespace Client\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends Controller {

    /**
     * @Route("/registration/location/{barcode}", name="_locations", requirements={"barcode" = "\d+"})
     * @Method("GET")
     */
    public function locationsFor($barcode) {
        $locations = "{
                        \"barcode\":\"$barcode\",
                        \"locations\":[{
                            \"location\":\"location1\",
                        },{
                            \"location\":\"location2\",
                        }]
                     }";
        $response = new Response($locations);
        return $response;
    }

} 