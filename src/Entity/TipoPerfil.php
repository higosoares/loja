<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoPerfilRepository")
 * @ORM\Table(name="tipo_perfil", indexes={@ORM\Index(name="fk_perfil_tipo_perfil1_idx", columns={"cod_tipo_perfil"}), @ORM\Index(name="fk_perfil_cliente1_idx", columns={"cod_cliente"})})
 *
 */
class TipoPerfil
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id_tipo_perfil", type="integer")
     */
    private $idTipoPerfil;

    public function getIdTipoPerfil(): ?int
    {
        return $this->idTipoPerfil;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="tx_nome_tipo_perfil", type="string", length=45, nullable=false)
     */
    private $txNomeTipoPerfil;

    public function getTxNomeTipoPerfil(): ?string
    {
        return $this->txNomeTipoPerfil;
    }

    public function setTxNomeTipoPerfil(string $txNomeTipoPerfil): self
    {
        $this->txNomeTipoPerfil = $txNomeTipoPerfil;

        return $this;
    }
}
