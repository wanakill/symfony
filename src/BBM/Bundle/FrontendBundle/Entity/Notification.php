<?php

namespace BBM\Bundle\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Notification
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Notification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="BBM\Bundle\FrontendBundle\Entity\User")
     * @Assert\NotBlank()
    */
    private $fromUser;

    /**
     *
     * @ORM\ManyToOne(targetEntity="BBM\Bundle\FrontendBundle\Entity\User")
     * @Assert\NotBlank()
    */
    private $toUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    protected $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="viewed", type="boolean")
     */
    protected $viewed;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    protected $type;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Notification
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set viewed
     *
     * @param boolean $viewed
     * @return Notification
     */
    public function setViewed($viewed)
    {
        $this->viewed = $viewed;
    
        return $this;
    }

    /**
     * Get viewed
     *
     * @return boolean 
     */
    public function getViewed()
    {
        return $this->viewed;
    }

    /**
     * Set fromUser
     *
     * @param BBM\Bundle\FrontendBundle\Entity\User $fromUser
     */
    public function setFromUser(\BBM\Bundle\FrontendBundle\Entity\User $fromUser)
    {
        $this->fromUser = $fromUser;
    }

    /**
     * Get fromUser
     *
     * @return BBM\Bundle\FrontendBundle\Entity\User 
     */
    public function getFromUser()
    {
        return $this->fromUser;
    }

    /**
     * Set toUser
     *
     * @param BBM\Bundle\FrontendBundle\Entity\User $toUser
     */
    public function settoUser(\BBM\Bundle\FrontendBundle\Entity\User $toUser)
    {
        $this->toUser = $toUser;
    }

    /**
     * Get toUser
     *
     * @return BBM\Bundle\FrontendBundle\Entity\User 
     */
    public function gettoUser()
    {
        return $this->toUser;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Notification
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}