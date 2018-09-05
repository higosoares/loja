<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity
 */
class Categoria
{
    /**
     * @var string
     *
     * @ORM\Column(name="nme_categoria", type="string", length=45, nullable=false)
     */
    private $nmeCategoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_categoria", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoria;



    /**
     * Set nmeCategoria
     *
     * @param string $nmeCategoria
     *
     * @return Categoria
     */
    public function setNmeCategoria($nmeCategoria)
    {
        $this->nmeCategoria = $nmeCategoria;

        return $this;
    }

    /**
     * Get nmeCategoria
     *
     * @return string
     */
    public function getNmeCategoria()
    {
        return $this->nmeCategoria;
    }

    /**
     * Get idCategoria
     *
     * @return integer
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
}
