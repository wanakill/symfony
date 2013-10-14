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



class UserController extends Controller
{

    public function getUserAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $userId = $this->getRequest()->get('user_id');
        $user = $em->getRepository('BBMFrontendBundle:User')->findOneById($userId);

        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new JsonEncoder()));
        $result = $serializer->serialize($user, 'json');

        
        return new Response($result);
    }


    public function updateUserCriteriasAction(){
        $em = $this->getDoctrine()->getEntityManager();

        if($this->getUser()){ //logged
            $userId = $this->getUser()->getId();
            $user = $em->getRepository('BBMFrontendBundle:User')->findOneById($userId);



            $user->setGcMarital($this->getRequest()->get('gc_maritalstatus'));
            $user->setGcHaveKids($this->getRequest()->get('gc_havekids'));
            $user->setGcWantsKids($this->getRequest()->get('gc_wantskids'));
            $user->setGcNationality($this->getRequest()->get('gc_nationality'));
            $user->setGcLanguages($this->getRequest()->get('gc_languages'));
            $user->setGcReligion($this->getRequest()->get('gc_religion'));
            $user->setGcPraticed($this->getRequest()->get('gc_praticed'));
            $user->setGcEmployement($this->getRequest()->get('gc_employement'));
            $user->setGcStudy($this->getRequest()->get('gc_study'));
            $user->setGcOwnFlat($this->getRequest()->get('gc_ownflat'));
            $user->setGcRentFlat($this->getRequest()->get('gc_rentflat'));
            $user->setGcOwnHouse($this->getRequest()->get('gc_ownhouse'));
            $user->setGcRentHouse($this->getRequest()->get('gc_renthouse'));
            $user->setGcSmoking($this->getRequest()->get('gc_smoking'));

            $user->setPcSize($this->getRequest()->get('pc_size'));
            $user->setPcWeight($this->getRequest()->get('pc_weight'));
            $user->setPcSilhouette($this->getRequest()->get('pc_silhouette'));
            $user->setPcHairColor($this->getRequest()->get('pc_haircolor'));
            $user->setPcHairLong($this->getRequest()->get('pc_hairlong'));
            $user->setPcEyeColor($this->getRequest()->get('pc_eyecolor'));
            $user->setPcAppearance($this->getRequest()->get('pc_appearance'));
            $user->setPcAttractive($this->getRequest()->get('pc_attractive'));
            $user->setPcStyle($this->getRequest()->get('pc_style'));
            $user->setPcOrigins($this->getRequest()->get('pc_origins'));

            $user->setLcPersonality($this->getRequest()->get('lc_personality'));
            $user->setLcRomantic($this->getRequest()->get('lc_romantic'));
            $user->setLcWantsMarried($this->getRequest()->get('lc_wantsmarried'));
            $user->setLcMusicStyle($this->getRequest()->get('lc_musicstyle'));
            $user->setLcMovieStyle($this->getRequest()->get('lc_moviestyle'));
            $user->setLcHobbies($this->getRequest()->get('lc_hobbies'));
            $user->setLcNightlife($this->getRequest()->get('lc_nightlife'));
            $user->setLcSports($this->getRequest()->get('lc_sports'));

            $em->persist($user);
            $em->flush();


/*    
id
birthdate
email
username
username_canonical
email_canonical
enabled
salt
password
last_login
locked
expired
expires_at
confirmation_token
password_requested_at
roles
credentials_expired
credentials_expire_at
gender
age
salary
city
country
visits
inscription_date
premium
avatar
zipcode
gc_maritalstatus
gc_havekids
gc_wantskids
gc_nationality
gc_languages
gc_religion
gc_praticed
gc_employement
gc_study
gc_ownflat
gc_rentflat
gc_ownhouse
gc_renthouse
gc_smoking
pc_size
pc_weight
pc_silhouette
pc_haircolor
pc_hairlong
pc_eyecolor
pc_appearance
pc_attractive
pc_style
pc_origins
lc_personality
lc_romantic
lc_wantsmarried
lc_musicstyle
lc_moviestyle
lc_hobbies
lc_nightlife
lc_sports
*/



            return new Response('TRUE');
        } else {
            return new Response('not logged in');
        }
    }

}
