<?php

namespace AppBundle\Entity;

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
     * @var \AppBundle\Entity\Oeuvre
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Oeuvre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_oeuvre", referencedColumnName="id")
     * })
     */
    private $idOeuvre;

    /**
     * @var \AppBundle\Entity\Adherant
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Adherant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adherant", referencedColumnName="id")
     * })
     */
    private $idAdherant;


}

