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


class NotificationController extends Controller
{

    function addNotificationAction(){
        $em = $this->getDoctrine()->getEntityManager();
        if($this->getUser()){ //logged
            $fromUserId = $this->getUser()->getId();

            $toUserId = $this->getRequest()->get('to_user_id');
            $type = $this->getRequest()->get('type');

            $fromUser = $em->getRepository('BBMFrontendBundle:User')->findOneById($fromUserId);
            $toUser = $em->getRepository('BBMFrontendBundle:User')->findOneById($toUserId);

            $notification = New Notification();
            $notification->setFromUser($fromUser);
            $notification->setToUser($toUser);
            $notification->setType($type);
            $notification->setViewed(0);
            $notification->setDate(new \DateTime());
            $em->persist($notification);
            $em->flush();

            return new Response("TRUE");
        } else {
            return new Response("not logged in");
        }
    }


    function getNotificationsNumberAction(){
        $em = $this->getDoctrine()->getEntityManager();

        if($this->getUser()){ //logged
            $userId = $this->getUser()->getId();
            $type = $this->getRequest()->get('type');

            $sql = $em->getConnection()->prepare('SELECT COUNT(*) as nbr FROM `notification` WHERE toUser_id='.$userId.' AND type="'.$type.'" AND viewed=0; ');
            $sql->execute();
            $value = $sql->fetch();

            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
            $result = $serializer->serialize($value['nbr'], 'json');

            return new Response($result);
        } else {
            return new Response('not logged in');
        }

    }

    function getAllNotificationsAction(){
        $em = $this->getDoctrine()->getEntityManager();

        if($this->getUser()){ //logged
            $userId = $this->getUser()->getId();
            $type = $this->getRequest()->get('type');

            $sql = $em->getConnection()->prepare('SELECT * FROM `notification` WHERE toUser_id='.$userId.' AND type="'.$type.'" ORDER BY date DESC LIMIT 24; ');
            $sql->execute();
            $notifications = $sql->fetchAll();

            $notifications_tmp = $notifications;
            //add source user informations
            foreach($notifications as $key => $value){
                $fromUser = $em->getRepository('BBMFrontendBundle:User')->findOneById($value['fromUser_id']);
                $notifications_tmp[$key]['fromUser']['id'] = $fromUser->getId();
                $notifications_tmp[$key]['fromUser']['username'] = $fromUser->getUsername();
                $notifications_tmp[$key]['fromUser']['age'] = $fromUser->getAge();
                $notifications_tmp[$key]['fromUser']['city'] = $fromUser->getCity();
                $notifications_tmp[$key]['fromUser']['salary'] = $fromUser->getSalary();
                $notifications_tmp[$key]['fromUser']['avatar'] = $fromUser->getAvatar();
            }


            $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
            $result = $serializer->serialize($notifications_tmp, 'json');

            return new Response($result);

        } else {
            return new Response('not logged in');
        }

    }

    function viewNotificationsAction(){
        $em = $this->getDoctrine()->getEntityManager();
        
        if($this->getUser()){ //logged
            $userId = $this->getUser()->getId();
            $type = $this->getRequest()->get('type');

            $sql = $em->getConnection()->prepare('UPDATE `notification` SET viewed=1 WHERE toUser_id='.$userId.' AND type="'.$type.'" AND viewed=0; ');
            $sql->execute();

            return new Response("TRUE");
        } else {
            return new Response('not logged in');
        }
    }


}
