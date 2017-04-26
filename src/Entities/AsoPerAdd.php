<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AsoPerAdd
 *
 * @ORM\Table(name="aso_per_add", indexes={@ORM\Index(name="aso_add", columns={"id_add"}), @ORM\Index(name="aso_add_type", columns={"id_add_type"}), @ORM\Index(name="IDX_4E0921FC12EB649B", columns={"id_person"})})
 * @ORM\Entity
 */
class AsoPerAdd
{
    /**
     * @var \AddAdd
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AddAdd")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_add", referencedColumnName="id_add")
     * })
     */
    private $idAdd;

    /**
     * @var \AddAddType
     *
     * @ORM\ManyToOne(targetEntity="AddAddType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_add_type", referencedColumnName="id_add_type")
     * })
     */
    private $idAddType;

    /**
     * @var \PerPerson
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="PerPerson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_person", referencedColumnName="id_person")
     * })
     */
    private $idPerson;


    /**
     * Set idAdd
     *
     * @param \AddAdd $idAdd
     *
     * @return AsoPerAdd
     */
    public function setIdAdd(\AddAdd $idAdd)
    {
        $this->idAdd = $idAdd;

        return $this;
    }

    /**
     * Get idAdd
     *
     * @return \AddAdd
     */
    public function getIdAdd()
    {
        return $this->idAdd;
    }

    /**
     * Set idAddType
     *
     * @param \AddAddType $idAddType
     *
     * @return AsoPerAdd
     */
    public function setIdAddType(\AddAddType $idAddType = null)
    {
        $this->idAddType = $idAddType;

        return $this;
    }

    /**
     * Get idAddType
     *
     * @return \AddAddType
     */
    public function getIdAddType()
    {
        return $this->idAddType;
    }

    /**
     * Set idPerson
     *
     * @param \PerPerson $idPerson
     *
     * @return AsoPerAdd
     */
    public function setIdPerson(\PerPerson $idPerson)
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
}

