<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrega
 *
 * @ORM\Table(name="entrega", indexes={@ORM\Index(name="fk_entrega_compra1_idx", columns={"cod_compra"})})
 * @ORM\Entity
 */
class Entrega
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="sts_entrega", type="boolean", nullable=false)
     */
    private $stsEntrega;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_entrega", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntrega;

    /**
     * @var \App\Entity\Compra
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Compra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_compra", referencedColumnName="id_compra")
     * })
     */
    private $codCompra;



    /**
     * Set stsEntrega
     *
     * @param boolean $stsEntrega
     *
     * @return Entrega
     */
    public function setStsEntrega($stsEntrega)
    {
        $this->stsEntrega = $stsEntrega;

        return $this;
    }

    /**
     * Get stsEntrega
     *
     * @return boolean
     */
    public function getStsEntrega()
    {
        return $this->stsEntrega;
    }

    /**
     * Get idEntrega
     *
     * @return integer
     */
    public function getIdEntrega()
    {
        return $this->idEntrega;
    }

    /**
     * Set codCompra
     *
     * @param \App\Entity\Compra $codCompra
     *
     * @return Entrega
     */
    public function setCodCompra(\App\Entity\Compra $codCompra = null)
    {
        $this->codCompra = $codCompra;

        return $this;
    }

    /**
     * Get codCompra
     *
     * @return \App\Entity\Compra
     */
    public function getCodCompra()
    {
        return $this->codCompra;
    }
}
