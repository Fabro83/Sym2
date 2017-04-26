<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * PerGender
 *
 * @ORM\Table(name="per_gender")
 * @ORM\Entity
 */
class PerGender
{
    /**
     * @var integer
     *
     * @ORM\Column(name="per_gender", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $perGender;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;


    /**
     * Get perGender
     *
     * @return integer
     */
    public function getPerGender()
    {
        return $this->perGender;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return PerGender
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

