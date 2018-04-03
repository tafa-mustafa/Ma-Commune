<?php

namespace MBC\bibliocommuneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oeuvre
 *
 * @ORM\Table(name="oeuvre")
 * @ORM\Entity
 */
class Oeuvre
{
    /**
     * @var string
     *
     * @ORM\Column(name="ISBN", type="string", length=30, nullable=false)
     */
    private $isbn;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_livre_libre", type="integer", nullable=false)
     */
    private $nbreLivreLibre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=30, nullable=false)
     */
    private $auteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

