<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TelPhoneType
 *
 * @ORM\Table(name="tel_phone_type")
 * @ORM\Entity
 */
class TelPhoneType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_phone_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPhoneType;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=15, nullable=true)
     */
    private $value;


    /**
     * Get idPhoneType
     *
     * @return integer
     */
    public function getIdPhoneType()
    {
        return $this->idPhoneType;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return TelPhoneType
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

