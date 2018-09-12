<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produto
 *
 * @ORM\Table(name="produto", indexes={@ORM\Index(name="fk_produto_categoria_subCategoria1_idx", columns={"cod_categoria_subCategoria"})})
 * @ORM\Entity
 */
class Produto
{
    /**
     * @var string
     *
     * @ORM\Column(name="nme_produto", type="string", length=45, nullable=false)
     */
    private $nmeProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="dsc_produto", type="string", length=45, nullable=false)
     */
    private $dscProduto;

    /**
     * @var float
     *
     * @ORM\Column(name="vlr_produto", type="float", precision=10, scale=0, nullable=false)
     */
    private $vlrProduto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sts_inventario_produto", type="boolean", nullable=false)
     */
    private $stsInventarioProduto;

    /**
     * @var float
     *
     * @ORM\Column(name="vlr_peso_produto", type="float", precision=10, scale=0, nullable=false)
     */
    private $vlrPesoProduto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_produto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduto;

    /**
     * @var \App\Entity\CategoriaSubcategoria
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\CategoriaSubcategoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_categoria_subCategoria", referencedColumnName="id_categoria_subCategoria")
     * })
     */
    private $codCategoriaSubcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="tx_url_imagem_produto", type="string", length=255, nullable=true)
     */
    private $txUrlImagemProduto;



    /**
     * Set nmeProduto
     *
     * @param string $nmeProduto
     *
     * @return Produto
     */
    public function setNmeProduto($nmeProduto)
    {
        $this->nmeProduto = $nmeProduto;

        return $this;
    }

    /**
     * Get nmeProduto
     *
     * @return string
     */
    public function getNmeProduto()
    {
        return $this->nmeProduto;
    }

    /**
     * Set dscProduto
     *
     * @param string $dscProduto
     *
     * @return Produto
     */
    public function setDscProduto($dscProduto)
    {
        $this->dscProduto = $dscProduto;

        return $this;
    }

    /**
     * Get dscProduto
     *
     * @return string
     */
    public function getDscProduto()
    {
        return $this->dscProduto;
    }

    /**
     * Set vlrProduto
     *
     * @param float $vlrProduto
     *
     * @return Produto
     */
    public function setVlrProduto($vlrProduto)
    {
        $this->vlrProduto = $vlrProduto;

        return $this;
    }

    /**
     * Get vlrProduto
     *
     * @return float
     */
    public function getVlrProduto()
    {
        return $this->vlrProduto;
    }

    /**
     * Set stsInventarioProduto
     *
     * @param boolean $stsInventarioProduto
     *
     * @return Produto
     */
    public function setStsInventarioProduto($stsInventarioProduto)
    {
        $this->stsInventarioProduto = $stsInventarioProduto;

        return $this;
    }

    /**
     * Get stsInventarioProduto
     *
     * @return boolean
     */
    public function getStsInventarioProduto()
    {
        return $this->stsInventarioProduto;
    }

    /**
     * Set vlrPesoProduto
     *
     * @param float $vlrPesoProduto
     *
     * @return Produto
     */
    public function setVlrPesoProduto($vlrPesoProduto)
    {
        $this->vlrPesoProduto = $vlrPesoProduto;

        return $this;
    }

    /**
     * Get vlrPesoProduto
     *
     * @return float
     */
    public function getVlrPesoProduto()
    {
        return $this->vlrPesoProduto;
    }

    /**
     * Get idProduto
     *
     * @return integer
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set codCategoriaSubcategoria
     *
     * @param \App\Entity\CategoriaSubcategoria $codCategoriaSubcategoria
     *
     * @return Produto
     */
    public function setCodCategoriaSubcategoria(\App\Entity\CategoriaSubcategoria $codCategoriaSubcategoria = null)
    {
        $this->codCategoriaSubcategoria = $codCategoriaSubcategoria;

        return $this;
    }

    /**
     * Get codCategoriaSubcategoria
     *
     * @return \App\Entity\CategoriaSubcategoria
     */
    public function getCodCategoriaSubcategoria()
    {
        return $this->codCategoriaSubcategoria;
    }

    /**
     * Set txUrlImagemProduto
     *
     * @param string $txUrlImagemProduto
     *
     * @return Produto
     */
    public function setTxUrlImagemProduto($txUrlImagemProduto)
    {
        $this->txUrlImagemProduto = $txUrlImagemProduto;

        return $this;
    }

    /**
     * Get txUrlImagemProduto
     *
     * @return string
     */
    public function getTxUrlImagemProduto()
    {
        return $this->txUrlImagemProduto;
    }


}
