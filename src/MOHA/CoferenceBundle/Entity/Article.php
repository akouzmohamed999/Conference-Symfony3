<?php

namespace MOHA\CoferenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="FK_ARTICLE_SESSION", columns={"id_sess"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=true)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_art", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArt;

    /**
     * @var \MOHA\CoferenceBundle\Entity\Session
     *
     * @ORM\ManyToOne(targetEntity="MOHA\CoferenceBundle\Entity\Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sess", referencedColumnName="id_sess")
     * })
     */
    private $idSess;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MOHA\CoferenceBundle\Entity\Auteur", mappedBy="idArt")
     */
    private $idAut;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idAut = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Get idArt
     *
     * @return integer
     */
    public function getIdArt()
    {
        return $this->idArt;
    }

    /**
     * Set idSess
     *
     * @param \MOHA\CoferenceBundle\Entity\Session $idSess
     *
     * @return Article
     */
    public function setIdSess(\MOHA\CoferenceBundle\Entity\Session $idSess = null)
    {
        $this->idSess = $idSess;

        return $this;
    }

    /**
     * Get idSess
     *
     * @return \MOHA\CoferenceBundle\Entity\Session
     */
    public function getIdSess()
    {
        return $this->idSess;
    }

    /**
     * Add idAut
     *
     * @param \MOHA\CoferenceBundle\Entity\Auteur $idAut
     *
     * @return Article
     */
    public function addIdAut(\MOHA\CoferenceBundle\Entity\Auteur $idAut)
    {
        $this->idAut[] = $idAut;

        return $this;
    }

    /**
     * Remove idAut
     *
     * @param \MOHA\CoferenceBundle\Entity\Auteur $idAut
     */
    public function removeIdAut(\MOHA\CoferenceBundle\Entity\Auteur $idAut)
    {
        $this->idAut->removeElement($idAut);
    }

    /**
     * Get idAut
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdAut()
    {
        return $this->idAut;
    }
}
