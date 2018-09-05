<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity
 */
class Item
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_item", type="string", length=45, nullable=false)
     */
    private $nomeItem;

    /**
     * @var string
     *
     * @ORM\Column(name="dsc_item", type="string", length=45, nullable=false)
     */
    private $dscItem;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_item", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idItem;



    /**
     * Set nomeItem
     *
     * @param string $nomeItem
     *
     * @return Item
     */
    public function setNomeItem($nomeItem)
    {
        $this->nomeItem = $nomeItem;

        return $this;
    }

    /**
     * Get nomeItem
     *
     * @return string
     */
    public function getNomeItem()
    {
        return $this->nomeItem;
    }

    /**
     * Set dscItem
     *
     * @param string $dscItem
     *
     * @return Item
     */
    public function setDscItem($dscItem)
    {
        $this->dscItem = $dscItem;

        return $this;
    }

    /**
     * Get dscItem
     *
     * @return string
     */
    public function getDscItem()
    {
        return $this->dscItem;
    }

    /**
     * Get idItem
     *
     * @return integer
     */
    public function getIdItem()
    {
        return $this->idItem;
    }
}
