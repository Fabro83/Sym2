<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * GeoCountry
 *
 * @ORM\Table(name="geo_country")
 * @ORM\Entity
 */
class GeoCountry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_country", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;


    /**
     * Get idCountry
     *
     * @return integer
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return GeoCountry
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

