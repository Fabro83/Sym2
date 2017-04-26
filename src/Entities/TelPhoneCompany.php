<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TelPhoneCompany
 *
 * @ORM\Table(name="tel_phone_company")
 * @ORM\Entity
 */
class TelPhoneCompany
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_phone_company", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPhoneCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;


    /**
     * Get idPhoneCompany
     *
     * @return integer
     */
    public function getIdPhoneCompany()
    {
        return $this->idPhoneCompany;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return TelPhoneCompany
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
}

