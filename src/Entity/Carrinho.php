<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrinho
 *
 * @ORM\Table(name="carrinho", indexes={@ORM\Index(name="fk_carrinho_cliente1_idx", columns={"cod_cliente"})})
 * @ORM\Entity
 */
class Carrinho
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_carrinho", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCarrinho;

    /**
     * @var \App\Entity\Cliente
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_cliente", referencedColumnName="id_cliente")
     * })
     */
    private $codCliente;



    /**
     * Get idCarrinho
     *
     * @return integer
     */
    public function getIdCarrinho()
    {
        return $this->idCarrinho;
    }

    /**
     * Set codCliente
     *
     * @param \App\Entity\Cliente $codCliente
     *
     * @return Carrinho
     */
    public function setCodCliente(\App\Entity\Cliente $codCliente = null)
    {
        $this->codCliente = $codCliente;

        return $this;
    }

    /**
     * Get codCliente
     *
     * @return \App\Entity\Cliente
     */
    public function getCodCliente()
    {
        return $this->codCliente;
    }
}
