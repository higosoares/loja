<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subcategoria
 *
 * @ORM\Table(name="subcategoria")
 * @ORM\Entity
 */
class Subcategoria
{
    /**
     * @var string
     *
     * @ORM\Column(name="nme_subCategoria", type="string", length=45, nullable=false)
     */
    private $nmeSubcategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_subCategoria", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSubcategoria;



    /**
     * Set nmeSubcategoria
     *
     * @param string $nmeSubcategoria
     *
     * @return Subcategoria
     */
    public function setNmeSubcategoria($nmeSubcategoria)
    {
        $this->nmeSubcategoria = $nmeSubcategoria;

        return $this;
    }

    /**
     * Get nmeSubcategoria
     *
     * @return string
     */
    public function getNmeSubcategoria()
    {
        return $this->nmeSubcategoria;
    }

    /**
     * Get idSubcategoria
     *
     * @return integer
     */
    public function getIdSubcategoria()
    {
        return $this->idSubcategoria;
    }
}
