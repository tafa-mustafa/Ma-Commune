<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image", indexes={@ORM\Index(name="id_oueuvre", columns={"id_oueuvre"}), @ORM\Index(name="id_livre", columns={"id_livre"})})
 * @ORM\Entity
 */
class Image
{
    /**
     * @var float
     *
     * @ORM\Column(name="nom", type="float", precision=10, scale=0, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Livre
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Livre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_livre", referencedColumnName="id")
     * })
     */
    private $idLivre;

    /**
     * @var \AppBundle\Entity\Oeuvre
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Oeuvre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_oueuvre", referencedColumnName="id")
     * })
     */
    private $idOueuvre;


}

