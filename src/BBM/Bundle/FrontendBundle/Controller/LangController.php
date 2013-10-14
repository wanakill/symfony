<?php

namespace BBM\Bundle\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Exception\AuthenticationException;



use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;


use BBM\Bundle\FrontendBundle\Entity\Notification;


class LangController extends Controller
{


    function getLangFileAction(){
        $em = $this->getDoctrine()->getEntityManager();

        $lang = "CH";
        if($this->getRequest()->get('lang')){
            $lang = $this->getRequest()->get('lang');
        } else if($this->getUser()){ //logged
            if($this->getUser()->getLang() != NULL){
                $lang = $this->getUser()->getLang();
            }
        }

        $pageName = $this->getRequest()->get('page_name');

        $test = file_get_contents( 'http://localhost'.$this->getRequest()->getBasePath().'/lang/'.$pageName.'/'.$lang.'_'.$pageName.'.json');

        return new Response($test);
    }


}
