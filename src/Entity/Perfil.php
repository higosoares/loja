<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PerfilRepository")
 * @ORM\Table(name="perfil")
 */
class Perfil
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @var \App\Entity\TipoPerfil
     *
     * @ORM\OneToOne(targetEntity="App\Entity\TipoPerfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_tipo_perfil", referencedColumnName="id_tipo_perfil")
     * })
     */
    private $codTipoPerfil;

    /**
     * @var \App\Entity\Cliente
     *
     * @ORM\OneToOne(targetEntity="App\Entity\Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cod_cliente", referencedColumnName="id_cliente")
     * })
     */
    private $codCliente;

    public function getCodTipoPerfil(): ?TipoPerfil
    {
        return $this->codTipoPerfil;
    }

    public function setCodTipoPerfil(?TipoPerfil $codTipoPerfil): self
    {
        $this->codTipoPerfil = $codTipoPerfil;

        return $this;
    }

    public function getCodCliente(): ?Cliente
    {
        return $this->codCliente;
    }

    public function setCodCliente(?Cliente $codCliente): self
    {
        $this->codCliente = $codCliente;

        return $this;
    }
}
