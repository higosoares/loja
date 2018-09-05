<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaSubcategoria
 *
 * @ORM\Table(name="categoria_subcategoria", indexes={@ORM\Index(name="fk_categoria_has_subCategoria_subCategoria1_idx", columns={"subCategoria_id_subCategoria"}), @ORM\Index(name="fk_categoria_has_subCategoria_categoria1_idx", columns={"categoria_id_categoria"})})
 * @ORM\Entity
 */
class CategoriaSubcategoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_categoria_subCategoria", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoriaSubcategoria;

    /**
     * @var \App\Entity\Categoria
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_id_categoria", referencedColumnName="id_categoria")
     * })
     */
    private $categoriaCategoria;

    /**
     * @var \App\Entity\Subcategoria
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Subcategoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subCategoria_id_subCategoria", referencedColumnName="id_subCategoria")
     * })
     */
    private $subcategoriaSubcategoria;



    /**
     * Get idCategoriaSubcategoria
     *
     * @return integer
     */
    public function getIdCategoriaSubcategoria()
    {
        return $this->idCategoriaSubcategoria;
    }

    /**
     * Set categoriaCategoria
     *
     * @param \App\Entity\Categoria $categoriaCategoria
     *
     * @return CategoriaSubcategoria
     */
    public function setCategoriaCategoria(\App\Entity\Categoria $categoriaCategoria = null)
    {
        $this->categoriaCategoria = $categoriaCategoria;

        return $this;
    }

    /**
     * Get categoriaCategoria
     *
     * @return \App\Entity\Categoria
     */
    public function getCategoriaCategoria()
    {
        return $this->categoriaCategoria;
    }

    /**
     * Set subcategoriaSubcategoria
     *
     * @param \App\Entity\Subcategoria $subcategoriaSubcategoria
     *
     * @return CategoriaSubcategoria
     */
    public function setSubcategoriaSubcategoria(\App\Entity\Subcategoria $subcategoriaSubcategoria = null)
    {
        $this->subcategoriaSubcategoria = $subcategoriaSubcategoria;

        return $this;
    }

    /**
     * Get subcategoriaSubcategoria
     *
     * @return \App\Entity\Subcategoria
     */
    public function getSubcategoriaSubcategoria()
    {
        return $this->subcategoriaSubcategoria;
    }
}
