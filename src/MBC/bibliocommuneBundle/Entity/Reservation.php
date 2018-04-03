<?php

namespace MBC\bibliocommuneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="id_adherant", columns={"id_adherant"}), @ORM\Index(name="id_oeuvre", columns={"id_oeuvre"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="date", nullable=false)
     */
    private $datereservation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \MBC\bibliocommuneBundle\Entity\Oeuvre
     *
     * @ORM\ManyToOne(targetEntity="MBC\bibliocommuneBundle\Entity\Oeuvre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_oeuvre", referencedColumnName="id")
     * })
     */
    private $idOeuvre;

    /**
     * @var \MBC\bibliocommuneBundle\Entity\Adherant
     *
     * @ORM\ManyToOne(targetEntity="MBC\bibliocommuneBundle\Entity\Adherant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adherant", referencedColumnName="id")
     * })
     */
    private $idAdherant;


}

