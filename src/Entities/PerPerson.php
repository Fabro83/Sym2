<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * PerPerson
 *
 * @ORM\Table(name="per_person", indexes={@ORM\Index(name="per_doc_type", columns={"id_doc_type"}), @ORM\Index(name="per_gender", columns={"id_gender"}), @ORM\Index(name="per_nal", columns={"id_nal"}), @ORM\Index(name="per_marital_status", columns={"id_marital_status"}), @ORM\Index(name="per_condition", columns={"id_condition"})})
 * @ORM\Entity
 */
class PerPerson
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_person", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=50, nullable=false)
     */
    private $surname;

    /**
     * @var integer
     *
     * @ORM\Column(name="doc_num", type="integer", nullable=false)
     */
    private $docNum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birth_date", type="date", nullable=false)
     */
    private $birthDate;

    /**
     * @var \PerCondition
     *
     * @ORM\ManyToOne(targetEntity="PerCondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_condition", referencedColumnName="id_condition")
     * })
     */
    private $idCondition;

    /**
     * @var \PerDocType
     *
     * @ORM\ManyToOne(targetEntity="PerDocType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_doc_type", referencedColumnName="id_doc_type")
     * })
     */
    private $idDocType;

    /**
     * @var \PerGender
     *
     * @ORM\ManyToOne(targetEntity="PerGender")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_gender", referencedColumnName="per_gender")
     * })
     */
    private $idGender;

    /**
     * @var \PerMaritalStatus
     *
     * @ORM\ManyToOne(targetEntity="PerMaritalStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_marital_status", referencedColumnName="id_marital_status")
     * })
     */
    private $idMaritalStatus;

    /**
     * @var \GeoCountry
     *
     * @ORM\ManyToOne(targetEntity="GeoCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nal", referencedColumnName="id_country")
     * })
     */
    private $idNal;


    /**
     * Get idPerson
     *
     * @return integer
     */
    public function getIdPerson()
    {
        return $this->idPerson;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PerPerson
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return PerPerson
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set docNum
     *
     * @param integer $docNum
     *
     * @return PerPerson
     */
    public function setDocNum($docNum)
    {
        $this->docNum = $docNum;

        return $this;
    }

    /**
     * Get docNum
     *
     * @return integer
     */
    public function getDocNum()
    {
        return $this->docNum;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return PerPerson
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set idCondition
     *
     * @param \PerCondition $idCondition
     *
     * @return PerPerson
     */
    public function setIdCondition(\PerCondition $idCondition = null)
    {
        $this->idCondition = $idCondition;

        return $this;
    }

    /**
     * Get idCondition
     *
     * @return \PerCondition
     */
    public function getIdCondition()
    {
        return $this->idCondition;
    }

    /**
     * Set idDocType
     *
     * @param \PerDocType $idDocType
     *
     * @return PerPerson
     */
    public function setIdDocType(\PerDocType $idDocType = null)
    {
        $this->idDocType = $idDocType;

        return $this;
    }

    /**
     * Get idDocType
     *
     * @return \PerDocType
     */
    public function getIdDocType()
    {
        return $this->idDocType;
    }

    /**
     * Set idGender
     *
     * @param \PerGender $idGender
     *
     * @return PerPerson
     */
    public function setIdGender(\PerGender $idGender = null)
    {
        $this->idGender = $idGender;

        return $this;
    }

    /**
     * Get idGender
     *
     * @return \PerGender
     */
    public function getIdGender()
    {
        return $this->idGender;
    }

    /**
     * Set idMaritalStatus
     *
     * @param \PerMaritalStatus $idMaritalStatus
     *
     * @return PerPerson
     */
    public function setIdMaritalStatus(\PerMaritalStatus $idMaritalStatus = null)
    {
        $this->idMaritalStatus = $idMaritalStatus;

        return $this;
    }

    /**
     * Get idMaritalStatus
     *
     * @return \PerMaritalStatus
     */
    public function getIdMaritalStatus()
    {
        return $this->idMaritalStatus;
    }

    /**
     * Set idNal
     *
     * @param \GeoCountry $idNal
     *
     * @return PerPerson
     */
    public function setIdNal(\GeoCountry $idNal = null)
    {
        $this->idNal = $idNal;

        return $this;
    }

    /**
     * Get idNal
     *
     * @return \GeoCountry
     */
    public function getIdNal()
    {
        return $this->idNal;
    }
}

