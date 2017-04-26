<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * PerCondition
 *
 * @ORM\Table(name="per_condition")
 * @ORM\Entity
 */
class PerCondition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_condition", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCondition;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=15, nullable=false)
     */
    private $value;


    /**
     * Get idCondition
     *
     * @return integer
     */
    public function getIdCondition()
    {
        return $this->idCondition;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return PerCondition
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

