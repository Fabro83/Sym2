<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TelPhone
 *
 * @ORM\Table(name="tel_phone", indexes={@ORM\Index(name="tel_per", columns={"id_person"}), @ORM\Index(name="tel_company", columns={"id_phone_company"}), @ORM\Index(name="tel_type", columns={"id_phone_type"})})
 * @ORM\Entity
 */
class TelPhone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_phone", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=15, nullable=false)
     */
    private $value;

    /**
     * @var \TelPhoneCompany
     *
     * @ORM\ManyToOne(targetEntity="TelPhoneCompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_phone_company", referencedColumnName="id_phone_company")
     * })
     */
    private $idPhoneCompany;

    /**
     * @var \PerPerson
     *
     * @ORM\ManyToOne(targetEntity="PerPerson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_person", referencedColumnName="id_person")
     * })
     */
    private $idPerson;

    /**
     * @var \TelPhoneType
     *
     * @ORM\ManyToOne(targetEntity="TelPhoneType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_phone_type", referencedColumnName="id_phone_type")
     * })
     */
    private $idPhoneType;


    /**
     * Get idPhone
     *
     * @return integer
     */
    public function getIdPhone()
    {
        return $this->idPhone;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return TelPhone
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set idPhoneCompany
     *
     * @param \TelPhoneCompany $idPhoneCompany
     *
     * @return TelPhone
     */
    public function setIdPhoneCompany(\TelPhoneCompany $idPhoneCompany = null)
    {
        $this->idPhoneCompany = $idPhoneCompany;

        return $this;
    }

    /**
     * Get idPhoneCompany
     *
     * @return \TelPhoneCompany
     */
    public function getIdPhoneCompany()
    {
        return $this->idPhoneCompany;
    }

    /**
     * Set idPerson
     *
     * @param \PerPerson $idPerson
     *
     * @return TelPhone
     */
    public function setIdPerson(\PerPerson $idPerson = null)
    {
        $this->idPerson = $idPerson;

        return $this;
    }

    /**
     * Get idPerson
     *
     * @return \PerPerson
     */
    public function getIdPerson()
    {
        return $this->idPerson;
    }

    /**
     * Set idPhoneType
     *
     * @param \TelPhoneType $idPhoneType
     *
     * @return TelPhone
     */
    public function setIdPhoneType(\TelPhoneType $idPhoneType = null)
    {
        $this->idPhoneType = $idPhoneType;

        return $this;
    }

    /**
     * Get idPhoneType
     *
     * @return \TelPhoneType
     */
    public function getIdPhoneType()
    {
        return $this->idPhoneType;
    }
}

