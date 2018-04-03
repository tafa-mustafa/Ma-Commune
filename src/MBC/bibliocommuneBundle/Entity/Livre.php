<?php

namespace MBC\bibliocommuneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 *
 * @ORM\Table(name="Livre", indexes={@ORM\Index(name="id_etat", columns={"id_etat"})})
 * @ORM\Entity
 */
class Livre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numerolivre", type="integer", nullable=false)
     */
    private $numerolivre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \MBC\bibliocommuneBundle\Entity\Etat
     *
     * @ORM\ManyToOne(targetEntity="MBC\bibliocommuneBundle\Entity\Etat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etat", referencedColumnName="id")
     * })
     */
    private $idEtat;


}

