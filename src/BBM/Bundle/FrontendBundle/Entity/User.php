<?php

namespace BBM\Bundle\FrontendBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $birthdate
     *
     * @ORM\Column(name="birthdate", type="datetime", nullable=true)
     */
    protected $birthdate;

    /**
     * @var string $avatar
     *
     * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
     */
    protected $avatar;

    /**
     * @var string $gender
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true)
     */
    protected $gender;

    /**
     * @var integer $age
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    protected $age;

    /**
     * @var integer $salary
     *
     * @ORM\Column(name="salary", type="integer", nullable=true)
     */
    protected $salary;

    /**
     * @var string $zipcode
     *
     * @ORM\Column(name="zipcode", type="string", length=255, nullable=true)
     */
    protected $zipcode;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    protected $city;

    /**
     * @var string $country
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    protected $country;

    /**
     * @var string $lang
     *
     * @ORM\Column(name="lang", type="string", length=255, nullable=true)
     */
    protected $lang;

    /**
     * @var integer $visits
     *
     * @ORM\Column(name="visits", type="integer", nullable=true)
     */
    protected $visits;

    /**
     * @var datetime $inscriptionDate
     *
     * @ORM\Column(name="inscription_date", type="datetime", nullable=true)
     */
    protected $inscriptionDate;

    /**
     * @var boolean $premium
     *
     * @ORM\Column(name="premium", type="boolean", nullable=true)
     */
    protected $premium;



//general criterias


    /**
     * @var string $gcMaritalstatus
     *
     * @ORM\Column(name="gc_maritalstatus", type="string", length=255, nullable=true)
     */
    protected $gcMarital;

    /**
     * @var string $gcHaveKids
     *
     * @ORM\Column(name="gc_havekids", type="string", length=255, nullable=true)
     */
    protected $gcHaveKids;

    /**
     * @var string $gcWantsKids
     *
     * @ORM\Column(name="gc_wantskids", type="string", length=255, nullable=true)
     */
    protected $gcWantsKids;

    /**
     * @var string $gcNationality
     *
     * @ORM\Column(name="gc_nationality", type="string", length=255, nullable=true)
     */
    protected $gcNationality;

    /**
     * @var string $gcLanguages
     *
     * @ORM\Column(name="gc_languages", type="string", length=255, nullable=true)
     */
    protected $gcLanguages;

    /**
     * @var string $gcReligion
     *
     * @ORM\Column(name="gc_religion", type="string", length=255, nullable=true)
     */
    protected $gcReligion;

    /**
     * @var string $gcPraticed
     *
     * @ORM\Column(name="gc_praticed", type="string", length=255, nullable=true)
     */
    protected $gcPraticed;

    /**
     * @var string $gcEmployement
     *
     * @ORM\Column(name="gc_employement", type="string", length=255, nullable=true)
     */
    protected $gcEmployement;

    /**
     * @var string $gcStudy
     *
     * @ORM\Column(name="gc_study", type="string", length=255, nullable=true)
     */
    protected $gcStudy;

    /**
     * @var string $gcOwnFlat
     *
     * @ORM\Column(name="gc_ownflat", type="string", length=255, nullable=true)
     */
    protected $gcOwnFlat;

    /**
     * @var string $gcRentFlat
     *
     * @ORM\Column(name="gc_rentflat", type="string", length=255, nullable=true)
     */
    protected $gcRentFlat;

    /**
     * @var string $gcOwnHouse
     *
     * @ORM\Column(name="gc_ownhouse", type="string", length=255, nullable=true)
     */
    protected $gcOwnHouse;

    /**
     * @var string $gcRentHouse
     *
     * @ORM\Column(name="gc_renthouse", type="string", length=255, nullable=true)
     */
    protected $gcRentHouse;

    /**
     * @var string $gcSmoking
     *
     * @ORM\Column(name="gc_smoking", type="string", length=255, nullable=true)
     */
    protected $gcSmoking;


//phisical criterias


    /**
     * @var string $pcSize
     *
     * @ORM\Column(name="pc_size", type="string", length=255, nullable=true)
     */
    protected $pcSize;

    /**
     * @var string $pcWeight
     *
     * @ORM\Column(name="pc_weight", type="string", length=255, nullable=true)
     */
    protected $pcWeight;

    /**
     * @var string $pcSilhouette
     *
     * @ORM\Column(name="pc_silhouette", type="string", length=255, nullable=true)
     */
    protected $pcSilhouette;

    /**
     * @var string $pcHairColor
     *
     * @ORM\Column(name="pc_haircolor", type="string", length=255, nullable=true)
     */
    protected $pcHairColor;

    /**
     * @var string $pcHairLong
     *
     * @ORM\Column(name="pc_hairlong", type="string", length=255, nullable=true)
     */
    protected $pcHairLong;

    /**
     * @var string $pcEyeColor
     *
     * @ORM\Column(name="pc_eyecolor", type="string", length=255, nullable=true)
     */
    protected $pcEyeColor;

    /**
     * @var string $pcAppearance
     *
     * @ORM\Column(name="pc_appearance", type="string", length=255, nullable=true)
     */
    protected $pcAppearance;

    /**
     * @var string $pcAttractive
     *
     * @ORM\Column(name="pc_attractive", type="string", length=255, nullable=true)
     */
    protected $pcAttractive;

    /**
     * @var string $pcStyle
     *
     * @ORM\Column(name="pc_style", type="string", length=255, nullable=true)
     */
    protected $pcStyle;

    /**
     * @var string $pcOrigins
     *
     * @ORM\Column(name="pc_origins", type="string", length=255, nullable=true)
     */
    protected $pcOrigins;



//life style criterias


    /**
     * @var string $lcPersonality
     *
     * @ORM\Column(name="lc_personality", type="string", length=255, nullable=true)
     */
    protected $lcPersonality;

    /**
     * @var string $lcRomantic
     *
     * @ORM\Column(name="lc_romantic", type="string", length=255, nullable=true)
     */
    protected $lcRomantic;

    /**
     * @var string $lcWantsMarried
     *
     * @ORM\Column(name="lc_wantsmarried", type="string", length=255, nullable=true)
     */
    protected $lcWantsMarried;

    /**
     * @var string $lcMusicStyle
     *
     * @ORM\Column(name="lc_musicstyle", type="string", length=255, nullable=true)
     */
    protected $lcMusicStyle;

    /**
     * @var string $lcMovieStyle
     *
     * @ORM\Column(name="lc_moviestyle", type="string", length=255, nullable=true)
     */
    protected $lcMovieStyle;

    /**
     * @var string $lcHobbies
     *
     * @ORM\Column(name="lc_hobbies", type="string", length=255, nullable=true)
     */
    protected $lcHobbies;

    /**
     * @var string $lcNightlife
     *
     * @ORM\Column(name="lc_nightlife", type="string", length=255, nullable=true)
     */
    protected $lcNightlife;

    /**
     * @var string $lcSports
     *
     * @ORM\Column(name="lc_sports", type="string", length=255, nullable=true)
     */
    protected $lcSports;



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

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
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return User
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    
        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set salary
     *
     * @param integer $salary
     * @return User
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    
        return $this;
    }

    /**
     * Get salary
     *
     * @return integer 
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set visits
     *
     * @param integer $visits
     * @return User
     */
    public function setVisits($visits)
    {
        $this->visits = $visits;
    
        return $this;
    }

    /**
     * Get visits
     *
     * @return integer 
     */
    public function getVisits()
    {
        return $this->visits;
    }

    /**
     * Set inscriptionDate
     *
     * @param \DateTime $inscriptionDate
     * @return User
     */
    public function setInscriptionDate($inscriptionDate)
    {
        $this->inscriptionDate = $inscriptionDate;
    
        return $this;
    }

    /**
     * Get inscriptionDate
     *
     * @return \DateTime 
     */
    public function getInscriptionDate()
    {
        return $this->inscriptionDate;
    }

    /**
     * Set premium
     *
     * @param boolean $premium
     * @return User
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;
    
        return $this;
    }

    /**
     * Get premium
     *
     * @return boolean 
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    
        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return User
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    
        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set gcMarital
     *
     * @param string $gcMarital
     * @return User
     */
    public function setGcMarital($gcMarital)
    {
        $this->gcMarital = $gcMarital;
    
        return $this;
    }

    /**
     * Get gcMarital
     *
     * @return string 
     */
    public function getGcMarital()
    {
        return $this->gcMarital;
    }

    /**
     * Set gcHaveKids
     *
     * @param string $gcHaveKids
     * @return User
     */
    public function setGcHaveKids($gcHaveKids)
    {
        $this->gcHaveKids = $gcHaveKids;
    
        return $this;
    }

    /**
     * Get gcHaveKids
     *
     * @return string 
     */
    public function getGcHaveKids()
    {
        return $this->gcHaveKids;
    }

    /**
     * Set gcWantsKids
     *
     * @param string $gcWantsKids
     * @return User
     */
    public function setGcWantsKids($gcWantsKids)
    {
        $this->gcWantsKids = $gcWantsKids;
    
        return $this;
    }

    /**
     * Get gcWantsKids
     *
     * @return string 
     */
    public function getGcWantsKids()
    {
        return $this->gcWantsKids;
    }

    /**
     * Set gcNationality
     *
     * @param string $gcNationality
     * @return User
     */
    public function setGcNationality($gcNationality)
    {
        $this->gcNationality = $gcNationality;
    
        return $this;
    }

    /**
     * Get gcNationality
     *
     * @return string 
     */
    public function getGcNationality()
    {
        return $this->gcNationality;
    }

    /**
     * Set gcLanguages
     *
     * @param string $gcLanguages
     * @return User
     */
    public function setGcLanguages($gcLanguages)
    {
        $this->gcLanguages = $gcLanguages;
    
        return $this;
    }

    /**
     * Get gcLanguages
     *
     * @return string 
     */
    public function getGcLanguages()
    {
        return $this->gcLanguages;
    }

    /**
     * Set gcReligion
     *
     * @param string $gcReligion
     * @return User
     */
    public function setGcReligion($gcReligion)
    {
        $this->gcReligion = $gcReligion;
    
        return $this;
    }

    /**
     * Get gcReligion
     *
     * @return string 
     */
    public function getGcReligion()
    {
        return $this->gcReligion;
    }

    /**
     * Set gcPraticed
     *
     * @param string $gcPraticed
     * @return User
     */
    public function setGcPraticed($gcPraticed)
    {
        $this->gcPraticed = $gcPraticed;
    
        return $this;
    }

    /**
     * Get gcPraticed
     *
     * @return string 
     */
    public function getGcPraticed()
    {
        return $this->gcPraticed;
    }

    /**
     * Set gcEmployement
     *
     * @param string $gcEmployement
     * @return User
     */
    public function setGcEmployement($gcEmployement)
    {
        $this->gcEmployement = $gcEmployement;
    
        return $this;
    }

    /**
     * Get gcEmployement
     *
     * @return string 
     */
    public function getGcEmployement()
    {
        return $this->gcEmployement;
    }

    /**
     * Set gcStudy
     *
     * @param string $gcStudy
     * @return User
     */
    public function setGcStudy($gcStudy)
    {
        $this->gcStudy = $gcStudy;
    
        return $this;
    }

    /**
     * Get gcStudy
     *
     * @return string 
     */
    public function getGcStudy()
    {
        return $this->gcStudy;
    }

    /**
     * Set gcOwnFlat
     *
     * @param string $gcOwnFlat
     * @return User
     */
    public function setGcOwnFlat($gcOwnFlat)
    {
        $this->gcOwnFlat = $gcOwnFlat;
    
        return $this;
    }

    /**
     * Get gcOwnFlat
     *
     * @return string 
     */
    public function getGcOwnFlat()
    {
        return $this->gcOwnFlat;
    }

    /**
     * Set gcRentFlat
     *
     * @param string $gcRentFlat
     * @return User
     */
    public function setGcRentFlat($gcRentFlat)
    {
        $this->gcRentFlat = $gcRentFlat;
    
        return $this;
    }

    /**
     * Get gcRentFlat
     *
     * @return string 
     */
    public function getGcRentFlat()
    {
        return $this->gcRentFlat;
    }

    /**
     * Set gcOwnHouse
     *
     * @param string $gcOwnHouse
     * @return User
     */
    public function setGcOwnHouse($gcOwnHouse)
    {
        $this->gcOwnHouse = $gcOwnHouse;
    
        return $this;
    }

    /**
     * Get gcOwnHouse
     *
     * @return string 
     */
    public function getGcOwnHouse()
    {
        return $this->gcOwnHouse;
    }

    /**
     * Set gcRentHouse
     *
     * @param string $gcRentHouse
     * @return User
     */
    public function setGcRentHouse($gcRentHouse)
    {
        $this->gcRentHouse = $gcRentHouse;
    
        return $this;
    }

    /**
     * Get gcRentHouse
     *
     * @return string 
     */
    public function getGcRentHouse()
    {
        return $this->gcRentHouse;
    }

    /**
     * Set gcSmoking
     *
     * @param string $gcSmoking
     * @return User
     */
    public function setGcSmoking($gcSmoking)
    {
        $this->gcSmoking = $gcSmoking;
    
        return $this;
    }

    /**
     * Get gcSmoking
     *
     * @return string 
     */
    public function getGcSmoking()
    {
        return $this->gcSmoking;
    }

    /**
     * Set pcSize
     *
     * @param string $pcSize
     * @return User
     */
    public function setPcSize($pcSize)
    {
        $this->pcSize = $pcSize;
    
        return $this;
    }

    /**
     * Get pcSize
     *
     * @return string 
     */
    public function getPcSize()
    {
        return $this->pcSize;
    }

    /**
     * Set pcWeight
     *
     * @param string $pcWeight
     * @return User
     */
    public function setPcWeight($pcWeight)
    {
        $this->pcWeight = $pcWeight;
    
        return $this;
    }

    /**
     * Get pcWeight
     *
     * @return string 
     */
    public function getPcWeight()
    {
        return $this->pcWeight;
    }

    /**
     * Set pcSilhouette
     *
     * @param string $pcSilhouette
     * @return User
     */
    public function setPcSilhouette($pcSilhouette)
    {
        $this->pcSilhouette = $pcSilhouette;
    
        return $this;
    }

    /**
     * Get pcSilhouette
     *
     * @return string 
     */
    public function getPcSilhouette()
    {
        return $this->pcSilhouette;
    }

    /**
     * Set pcHairColor
     *
     * @param string $pcHairColor
     * @return User
     */
    public function setPcHairColor($pcHairColor)
    {
        $this->pcHairColor = $pcHairColor;
    
        return $this;
    }

    /**
     * Get pcHairColor
     *
     * @return string 
     */
    public function getPcHairColor()
    {
        return $this->pcHairColor;
    }

    /**
     * Set pcHairLong
     *
     * @param string $pcHairLong
     * @return User
     */
    public function setPcHairLong($pcHairLong)
    {
        $this->pcHairLong = $pcHairLong;
    
        return $this;
    }

    /**
     * Get pcHairLong
     *
     * @return string 
     */
    public function getPcHairLong()
    {
        return $this->pcHairLong;
    }

    /**
     * Set pcEyeColor
     *
     * @param string $pcEyeColor
     * @return User
     */
    public function setPcEyeColor($pcEyeColor)
    {
        $this->pcEyeColor = $pcEyeColor;
    
        return $this;
    }

    /**
     * Get pcEyeColor
     *
     * @return string 
     */
    public function getPcEyeColor()
    {
        return $this->pcEyeColor;
    }

    /**
     * Set pcAppearance
     *
     * @param string $pcAppearance
     * @return User
     */
    public function setPcAppearance($pcAppearance)
    {
        $this->pcAppearance = $pcAppearance;
    
        return $this;
    }

    /**
     * Get pcAppearance
     *
     * @return string 
     */
    public function getPcAppearance()
    {
        return $this->pcAppearance;
    }

    /**
     * Set pcAttractive
     *
     * @param string $pcAttractive
     * @return User
     */
    public function setPcAttractive($pcAttractive)
    {
        $this->pcAttractive = $pcAttractive;
    
        return $this;
    }

    /**
     * Get pcAttractive
     *
     * @return string 
     */
    public function getPcAttractive()
    {
        return $this->pcAttractive;
    }

    /**
     * Set pcStyle
     *
     * @param string $pcStyle
     * @return User
     */
    public function setPcStyle($pcStyle)
    {
        $this->pcStyle = $pcStyle;
    
        return $this;
    }

    /**
     * Get pcStyle
     *
     * @return string 
     */
    public function getPcStyle()
    {
        return $this->pcStyle;
    }

    /**
     * Set pcOrigins
     *
     * @param string $pcOrigins
     * @return User
     */
    public function setPcOrigins($pcOrigins)
    {
        $this->pcOrigins = $pcOrigins;
    
        return $this;
    }

    /**
     * Get pcOrigins
     *
     * @return string 
     */
    public function getPcOrigins()
    {
        return $this->pcOrigins;
    }

    /**
     * Set lcPersonality
     *
     * @param string $lcPersonality
     * @return User
     */
    public function setLcPersonality($lcPersonality)
    {
        $this->lcPersonality = $lcPersonality;
    
        return $this;
    }

    /**
     * Get lcPersonality
     *
     * @return string 
     */
    public function getLcPersonality()
    {
        return $this->lcPersonality;
    }

    /**
     * Set lcRomantic
     *
     * @param string $lcRomantic
     * @return User
     */
    public function setLcRomantic($lcRomantic)
    {
        $this->lcRomantic = $lcRomantic;
    
        return $this;
    }

    /**
     * Get lcRomantic
     *
     * @return string 
     */
    public function getLcRomantic()
    {
        return $this->lcRomantic;
    }

    /**
     * Set lcWantsMarried
     *
     * @param string $lcWantsMarried
     * @return User
     */
    public function setLcWantsMarried($lcWantsMarried)
    {
        $this->lcWantsMarried = $lcWantsMarried;
    
        return $this;
    }

    /**
     * Get lcWantsMarried
     *
     * @return string 
     */
    public function getLcWantsMarried()
    {
        return $this->lcWantsMarried;
    }

    /**
     * Set lcMusicStyle
     *
     * @param string $lcMusicStyle
     * @return User
     */
    public function setLcMusicStyle($lcMusicStyle)
    {
        $this->lcMusicStyle = $lcMusicStyle;
    
        return $this;
    }

    /**
     * Get lcMusicStyle
     *
     * @return string 
     */
    public function getLcMusicStyle()
    {
        return $this->lcMusicStyle;
    }

    /**
     * Set lcMovieStyle
     *
     * @param string $lcMovieStyle
     * @return User
     */
    public function setLcMovieStyle($lcMovieStyle)
    {
        $this->lcMovieStyle = $lcMovieStyle;
    
        return $this;
    }

    /**
     * Get lcMovieStyle
     *
     * @return string 
     */
    public function getLcMovieStyle()
    {
        return $this->lcMovieStyle;
    }

    /**
     * Set lcHobbies
     *
     * @param string $lcHobbies
     * @return User
     */
    public function setLcHobbies($lcHobbies)
    {
        $this->lcHobbies = $lcHobbies;
    
        return $this;
    }

    /**
     * Get lcHobbies
     *
     * @return string 
     */
    public function getLcHobbies()
    {
        return $this->lcHobbies;
    }

    /**
     * Set lcNightlife
     *
     * @param string $lcNightlife
     * @return User
     */
    public function setLcNightlife($lcNightlife)
    {
        $this->lcNightlife = $lcNightlife;
    
        return $this;
    }

    /**
     * Get lcNightlife
     *
     * @return string 
     */
    public function getLcNightlife()
    {
        return $this->lcNightlife;
    }

    /**
     * Set lcSports
     *
     * @param string $lcSports
     * @return User
     */
    public function setLcSports($lcSports)
    {
        $this->lcSports = $lcSports;
    
        return $this;
    }

    /**
     * Get lcSports
     *
     * @return string 
     */
    public function getLcSports()
    {
        return $this->lcSports;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return User
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    
        return $this;
    }

    /**
     * Get lang
     *
     * @return string 
     */
    public function getLang()
    {
        return $this->lang;
    }
}