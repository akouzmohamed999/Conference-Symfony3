<?php

namespace MOHA\CoferenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session", indexes={@ORM\Index(name="FK_PRESIDENT_SESSION", columns={"id_pres"}), @ORM\Index(name="FK_PROG_SESSION", columns={"id_prog"})})
 * @ORM\Entity
 */
class Session
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_deb", type="datetime", nullable=true)
     */
    private $heureDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_fin", type="datetime", nullable=true)
     */
    private $heureFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jour", type="date", nullable=true)
     */
    private $jour;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sess", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSess;

    /**
     * @var \MOHA\CoferenceBundle\Entity\Programme
     *
     * @ORM\ManyToOne(targetEntity="MOHA\CoferenceBundle\Entity\Programme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prog", referencedColumnName="id_prog")
     * })
     */
    private $idProg;

    /**
     * @var \MOHA\CoferenceBundle\Entity\President
     *
     * @ORM\ManyToOne(targetEntity="MOHA\CoferenceBundle\Entity\President")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pres", referencedColumnName="id_pres")
     * })
     */
    private $idPres;



    /**
     * Set heureDeb
     *
     * @param \DateTime $heureDeb
     *
     * @return Session
     */
    public function setHeureDeb($heureDeb)
    {
        $this->heureDeb = $heureDeb;

        return $this;
    }

    /**
     * Get heureDeb
     *
     * @return \DateTime
     */
    public function getHeureDeb()
    {
        return $this->heureDeb;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     *
     * @return Session
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set jour
     *
     * @param \DateTime $jour
     *
     * @return Session
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return \DateTime
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Get idSess
     *
     * @return integer
     */
    public function getIdSess()
    {
        return $this->idSess;
    }

    /**
     * Set idProg
     *
     * @param \MOHA\CoferenceBundle\Entity\Programme $idProg
     *
     * @return Session
     */
    public function setIdProg(\MOHA\CoferenceBundle\Entity\Programme $idProg = null)
    {
        $this->idProg = $idProg;

        return $this;
    }

    /**
     * Get idProg
     *
     * @return \MOHA\CoferenceBundle\Entity\Programme
     */
    public function getIdProg()
    {
        return $this->idProg;
    }

    /**
     * Set idPres
     *
     * @param \MOHA\CoferenceBundle\Entity\President $idPres
     *
     * @return Session
     */
    public function setIdPres(\MOHA\CoferenceBundle\Entity\President $idPres = null)
    {
        $this->idPres = $idPres;

        return $this;
    }

    /**
     * Get idPres
     *
     * @return \MOHA\CoferenceBundle\Entity\President
     */
    public function getIdPres()
    {
        return $this->idPres;
    }
}
