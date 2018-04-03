<?php

namespace MBC\bibliocommuneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emprunt
 *
 * @ORM\Table(name="emprunt", indexes={@ORM\Index(name="id_adherant", columns={"id_adherant"}), @ORM\Index(name="id_livre", columns={"id_livre"})})
 * @ORM\Entity
 */
class Emprunt
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRetour_theorique", type="date", nullable=false)
     */
    private $dateretourTheorique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRetour_Effective", type="date", nullable=false)
     */
    private $dateretourEffective;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \MBC\bibliocommuneBundle\Entity\Adherant
     *
     * @ORM\ManyToOne(targetEntity="MBC\bibliocommuneBundle\Entity\Adherant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adherant", referencedColumnName="id")
     * })
     */
    private $idAdherant;

    /**
     * @var \MBC\bibliocommuneBundle\Entity\Livre
     *
     * @ORM\ManyToOne(targetEntity="MBC\bibliocommuneBundle\Entity\Livre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_livre", referencedColumnName="id")
     * })
     */
    private $idLivre;


}

