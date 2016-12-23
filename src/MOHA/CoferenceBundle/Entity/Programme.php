<?php

namespace MOHA\CoferenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programme
 *
 * @ORM\Table(name="programme")
 * @ORM\Entity
 */
class Programme
{
    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="text", length=65535, nullable=true)
     */
    private $intitule;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb", type="date", nullable=true)
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_prog", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProg;



    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Programme
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set dateDeb
     *
     * @param \DateTime $dateDeb
     *
     * @return Programme
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    /**
     * Get dateDeb
     *
     * @return \DateTime
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Programme
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Get idProg
     *
     * @return integer
     */
    public function getIdProg()
    {
        return $this->idProg;
    }
}
