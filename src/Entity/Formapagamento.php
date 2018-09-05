<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formapagamento
 *
 * @ORM\Table(name="formapagamento")
 * @ORM\Entity
 */
class Formapagamento
{
    /**
     * @var string
     *
     * @ORM\Column(name="dsc_formaPagamento", type="string", length=45, nullable=false)
     */
    private $dscFormapagamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_formaPagamento", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormapagamento;



    /**
     * Set dscFormapagamento
     *
     * @param string $dscFormapagamento
     *
     * @return Formapagamento
     */
    public function setDscFormapagamento($dscFormapagamento)
    {
        $this->dscFormapagamento = $dscFormapagamento;

        return $this;
    }

    /**
     * Get dscFormapagamento
     *
     * @return string
     */
    public function getDscFormapagamento()
    {
        return $this->dscFormapagamento;
    }

    /**
     * Get idFormapagamento
     *
     * @return integer
     */
    public function getIdFormapagamento()
    {
        return $this->idFormapagamento;
    }
}
