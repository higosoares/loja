<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarrinhoProduto
 *
 * @ORM\Table(name="carrinho_produto", indexes={@ORM\Index(name="fk_carrinho_has_produto_produto1_idx", columns={"cod_produto"}), @ORM\Index(name="fk_carrinho_has_produto_carrinho1_idx", columns={"cod_carrinho"})})
 * @ORM\Entity
 */
class CarrinhoProduto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_carrinho_produto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCarrinhoProduto;

    /**
     * @var \App\Entity\Carrinho
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Carrinho")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_carrinho", referencedColumnName="id_carrinho")
     * })
     */
    private $codCarrinho;

    /**
     * @var \App\Entity\Produto
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Produto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_produto", referencedColumnName="id_produto")
     * })
     */
    private $codProduto;



    /**
     * Get idCarrinhoProduto
     *
     * @return integer
     */
    public function getIdCarrinhoProduto()
    {
        return $this->idCarrinhoProduto;
    }

    /**
     * Set codCarrinho
     *
     * @param \App\Entity\Carrinho $codCarrinho
     *
     * @return CarrinhoProduto
     */
    public function setCodCarrinho(\App\Entity\Carrinho $codCarrinho = null)
    {
        $this->codCarrinho = $codCarrinho;

        return $this;
    }

    /**
     * Get codCarrinho
     *
     * @return \App\Entity\Carrinho
     */
    public function getCodCarrinho()
    {
        return $this->codCarrinho;
    }

    /**
     * Set codProduto
     *
     * @param \App\Entity\Produto $codProduto
     *
     * @return CarrinhoProduto
     */
    public function setCodProduto(\App\Entity\Produto $codProduto = null)
    {
        $this->codProduto = $codProduto;

        return $this;
    }

    /**
     * Get codProduto
     *
     * @return \App\Entity\Produto
     */
    public function getCodProduto()
    {
        return $this->codProduto;
    }
}
