<?php

namespace Usine\MachineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Machine
 *
 * @ORM\Table(name="machine")
 * @ORM\Entity(repositoryClass="Usine\MachineBundle\Repository\MachineRepository")
 */
class Machine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMachine", type="string", length=60)
     */
    private $nomMachine;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_piece_bonne", type="integer")
     */
    private $nbPieceBonne;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_piece_movaise", type="integer")
     */
    private $nbPieceMovaise;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255)
     */
    private $lien;

    /**
     * @var int
     *
     * @ORM\Column(name="bn_heure_fonc", type="integer")
     */
    private $bnHeureFonc;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_heure_arret", type="integer")
     */
    private $nbHeureArret;

    /**
     * @var int
     *
     * @ORM\Column(name="objectif", type="integer")
     */
    private $objectif;

    /**
     * @var int
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }




    /**
     * @ORM\ManyToOne(targetEntity="Block",inversedBy="machine")
     */
    private $block;

    /**
     * @return mixed
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * @param mixed $block
     */
    public function setBlock($block)
    {
        $this->block = $block;
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomMachine
     *
     * @param string $nomMachine
     *
     * @return Machine
     */
    public function setNomMachine($nomMachine)
    {
        $this->nomMachine = $nomMachine;

        return $this;
    }

    /**
     * Get nomMachine
     *
     * @return string
     */
    public function getNomMachine()
    {
        return $this->nomMachine;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }



    /**
     * Set nbPieceBonne
     *
     * @param integer $nbPieceBonne
     *
     * @return Machine
     */
    public function setNbPieceBonne($nbPieceBonne)
    {
        $this->nbPieceBonne = $nbPieceBonne;

        return $this;
    }

    /**
     * Get nbPieceBonne
     *
     * @return int
     */
    public function getNbPieceBonne()
    {
        return $this->nbPieceBonne;
    }

    /**
     * Set nbPieceMovaise
     *
     * @param integer $nbPieceMovaise
     *
     * @return Machine
     */
    public function setNbPieceMovaise($nbPieceMovaise)
    {
        $this->nbPieceMovaise = $nbPieceMovaise;

        return $this;
    }

    /**
     * Get nbPieceMovaise
     *
     * @return int
     */
    public function getNbPieceMovaise()
    {
        return $this->nbPieceMovaise;
    }

    /**
     * Set lien
     *
     * @param string $lien
     *
     * @return Machine
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set bnHeureFonc
     *
     * @param integer $bnHeureFonc
     *
     * @return Machine
     */
    public function setBnHeureFonc($bnHeureFonc)
    {
        $this->bnHeureFonc = $bnHeureFonc;

        return $this;
    }

    /**
     * Get bnHeureFonc
     *
     * @return int
     */
    public function getBnHeureFonc()
    {
        return $this->bnHeureFonc;
    }

    /**
     * Set nbHeureArret
     *
     * @param integer $nbHeureArret
     *
     * @return Machine
     */
    public function setNbHeureArret($nbHeureArret)
    {
        $this->nbHeureArret = $nbHeureArret;

        return $this;
    }

    /**
     * Get nbHeureArret
     *
     * @return int
     */
    public function getNbHeureArret()
    {
        return $this->nbHeureArret;
    }

    /**
     * Set objectif
     *
     * @param integer $objectif
     *
     * @return Machine
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;

        return $this;
    }

    /**
     * Get objectif
     *
     * @return int
     */
    public function getObjectif()
    {
        return $this->objectif;
    }
}
