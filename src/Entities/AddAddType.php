<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AddAddType
 *
 * @ORM\Table(name="add_add_type")
 * @ORM\Entity
 */
class AddAddType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_add_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAddType;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=15, nullable=false)
     */
    private $value;


    /**
     * Get idAddType
     *
     * @return integer
     */
    public function getIdAddType()
    {
        return $this->idAddType;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return AddAddType
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

