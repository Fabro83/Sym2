<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * PerMaritalStatus
 *
 * @ORM\Table(name="per_marital_status")
 * @ORM\Entity
 */
class PerMaritalStatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_marital_status", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMaritalStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=10, nullable=false)
     */
    private $value;


    /**
     * Get idMaritalStatus
     *
     * @return integer
     */
    public function getIdMaritalStatus()
    {
        return $this->idMaritalStatus;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return PerMaritalStatus
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

