<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * PerDocType
 *
 * @ORM\Table(name="per_doc_type")
 * @ORM\Entity
 */
class PerDocType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_doc_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDocType;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=10, nullable=false)
     */
    private $value;


    /**
     * Get idDocType
     *
     * @return integer
     */
    public function getIdDocType()
    {
        return $this->idDocType;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return PerDocType
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

