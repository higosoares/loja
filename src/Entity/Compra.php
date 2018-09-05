<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compra
 *
 * @ORM\Table(name="compra", indexes={@ORM\Index(name="fk_compra_formaPagamento1_idx", columns={"cod_formaPagamento"}), @ORM\Index(name="fk_compra_carrinho_produto1_idx", columns={"cod_carrinho_produto"})})
 * @ORM\Entity
 */
class Compra
{
    /**
     * @var string
     *
     * @ORM\Column(name="vlr_desconto_compra", type="string", length=45, nullable=true)
     */
    private $vlrDescontoCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="vlr_taxa_compra", type="string", length=45, nullable=true)
     */
    private $vlrTaxaCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="vlr_total_compra", type="string", length=45, nullable=false)
     */
    private $vlrTotalCompra;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_compra", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompra;

    /**
     * @var \App\Entity\CarrinhoProduto
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\CarrinhoProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_carrinho_produto", referencedColumnName="id_carrinho_produto")
     * })
     */
    private $codCarrinhoProduto;

    /**
     * @var \App\Entity\Formapagamento
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Formapagamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_formaPagamento", referencedColumnName="id_formaPagamento")
     * })
     */
    private $codFormapagamento;



    /**
     * Set vlrDescontoCompra
     *
     * @param string $vlrDescontoCompra
     *
     * @return Compra
     */
    public function setVlrDescontoCompra($vlrDescontoCompra)
    {
        $this->vlrDescontoCompra = $vlrDescontoCompra;

        return $this;
    }

    /**
     * Get vlrDescontoCompra
     *
     * @return string
     */
    public function getVlrDescontoCompra()
    {
        return $this->vlrDescontoCompra;
    }

    /**
     * Set vlrTaxaCompra
     *
     * @param string $vlrTaxaCompra
     *
     * @return Compra
     */
    public function setVlrTaxaCompra($vlrTaxaCompra)
    {
        $this->vlrTaxaCompra = $vlrTaxaCompra;

        return $this;
    }

    /**
     * Get vlrTaxaCompra
     *
     * @return string
     */
    public function getVlrTaxaCompra()
    {
        return $this->vlrTaxaCompra;
    }

    /**
     * Set vlrTotalCompra
     *
     * @param string $vlrTotalCompra
     *
     * @return Compra
     */
    public function setVlrTotalCompra($vlrTotalCompra)
    {
        $this->vlrTotalCompra = $vlrTotalCompra;

        return $this;
    }

    /**
     * Get vlrTotalCompra
     *
     * @return string
     */
    public function getVlrTotalCompra()
    {
        return $this->vlrTotalCompra;
    }

    /**
     * Get idCompra
     *
     * @return integer
     */
    public function getIdCompra()
    {
        return $this->idCompra;
    }

    /**
     * Set codCarrinhoProduto
     *
     * @param \App\Entity\CarrinhoProduto $codCarrinhoProduto
     *
     * @return Compra
     */
    public function setCodCarrinhoProduto(\App\Entity\CarrinhoProduto $codCarrinhoProduto = null)
    {
        $this->codCarrinhoProduto = $codCarrinhoProduto;

        return $this;
    }

    /**
     * Get codCarrinhoProduto
     *
     * @return \App\Entity\CarrinhoProduto
     */
    public function getCodCarrinhoProduto()
    {
        return $this->codCarrinhoProduto;
    }

    /**
     * Set codFormapagamento
     *
     * @param \App\Entity\Formapagamento $codFormapagamento
     *
     * @return Compra
     */
    public function setCodFormapagamento(\App\Entity\Formapagamento $codFormapagamento = null)
    {
        $this->codFormapagamento = $codFormapagamento;

        return $this;
    }

    /**
     * Get codFormapagamento
     *
     * @return \App\Entity\Formapagamento
     */
    public function getCodFormapagamento()
    {
        return $this->codFormapagamento;
    }
}
