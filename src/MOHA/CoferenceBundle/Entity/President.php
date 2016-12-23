<?php

namespace MOHA\CoferenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * President
 *
 * @ORM\Table(name="president")
 * @ORM\Entity
 */
class President
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
     * @var string
     *
     * @ORM\Column(name="departement", type="text", length=65535, nullable=true)
     */
    private $departement;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_pres", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPres;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return President
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
     * @return President
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
     * @return President
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
     * Set departement
     *
     * @param string $departement
     *
     * @return President
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Get idPres
     *
     * @return integer
     */
    public function getIdPres()
    {
        return $this->idPres;
    }
}
