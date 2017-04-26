<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AddAdd
 *
 * @ORM\Table(name="add_add")
 * @ORM\Entity
 */
class AddAdd
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_add", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=40, nullable=false)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=10, nullable=false)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=8, nullable=true)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="district", type="string", length=20, nullable=true)
     */
    private $district;


    /**
     * Get idAdd
     *
     * @return integer
     */
    public function getIdAdd()
    {
        return $this->idAdd;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return AddAdd
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return AddAdd
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return AddAdd
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set district
     *
     * @param string $district
     *
     * @return AddAdd
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }
}

