<?php

namespace MOHA\CoferenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auteur
 *
 * @ORM\Table(name="auteur")
 * @ORM\Entity
 */
class Auteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="text", length=65535, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_aut", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAut;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="MOHA\CoferenceBundle\Entity\Article", inversedBy="idAut")
     * @ORM\JoinTable(name="auteur_article",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_aut", referencedColumnName="id_aut")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_art", referencedColumnName="id_art")
     *   }
     * )
     */
    private $idArt;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idArt = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Auteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Auteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Auteur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get idAut
     *
     * @return integer
     */
    public function getIdAut()
    {
        return $this->idAut;
    }

    /**
     * Add idArt
     *
     * @param \MOHA\CoferenceBundle\Entity\Article $idArt
     *
     * @return Auteur
     */
    public function addIdArt(\MOHA\CoferenceBundle\Entity\Article $idArt)
    {
        $this->idArt[] = $idArt;

        return $this;
    }

    /**
     * Remove idArt
     *
     * @param \MOHA\CoferenceBundle\Entity\Article $idArt
     */
    public function removeIdArt(\MOHA\CoferenceBundle\Entity\Article $idArt)
    {
        $this->idArt->removeElement($idArt);
    }

    /**
     * Get idArt
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdArt()
    {
        return $this->idArt;
    }
}
