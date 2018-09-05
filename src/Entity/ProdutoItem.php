<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProdutoItem
 *
 * @ORM\Table(name="produto_item", indexes={@ORM\Index(name="fk_produto_has_item_item1_idx", columns={"cod_item"}), @ORM\Index(name="fk_produto_has_item_produto1_idx", columns={"cod_produto"})})
 * @ORM\Entity
 */
class ProdutoItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produto_item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProdutoItem;

    /**
     * @var \App\Entity\Item
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_item", referencedColumnName="id_item")
     * })
     */
    private $codItem;

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
     * Get idProdutoItem
     *
     * @return integer
     */
    public function getIdProdutoItem()
    {
        return $this->idProdutoItem;
    }

    /**
     * Set codItem
     *
     * @param \App\Entity\Item $codItem
     *
     * @return ProdutoItem
     */
    public function setCodItem(\App\Entity\Item $codItem = null)
    {
        $this->codItem = $codItem;

        return $this;
    }

    /**
     * Get codItem
     *
     * @return \App\Entity\Item
     */
    public function getCodItem()
    {
        return $this->codItem;
    }

    /**
     * Set codProduto
     *
     * @param \App\Entity\Produto $codProduto
     *
     * @return ProdutoItem
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
