<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_cliente", type="string", length=255, nullable=false)
     */
    private $nomeCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nme_sobrenome_cliente", type="string", length=255, nullable=false)
     */
    private $nmeSobrenomeCliente;

    /**
     * @var date
     *
     * @ORM\Column(name="dta_nasc_cliente", type="string", length=45, nullable=false)
     */
    private $dtaNascCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="eml_cliente", type="string", length=45, nullable=false)
     */
    private $emlCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="end_cliente", type="string", length=45, nullable=false)
     */
    private $endCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_cliente", type="string", length=11, nullable=false)
     */
    private $telCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_cliente", type="string", length=11, nullable=false)
     */
    private $cpfCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="rg_cliente", type="string", length=7, nullable=true)
     */
    private $rgCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="pwd_cliente", type="string", length=45, nullable=false)
     */
    private $pwdCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cliente", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;



    /**
     * Set nomeCliente
     *
     * @param string $nomeCliente
     *
     * @return Cliente
     */
    public function setUsername($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    /**
     * Get nomeCliente
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->nomeCliente;
    }

    /**
     * Set nmeSobrenomeCliente
     *
     * @param string $nmeSobrenomeCliente
     *
     * @return Cliente
     */
    public function setNmeSobrenomeCliente($nmeSobrenomeCliente)
    {
        $this->nmeSobrenomeCliente = $nmeSobrenomeCliente;

        return $this;
    }

    /**
     * Get nmeSobrenomeCliente
     *
     * @return string
     */
    public function getNmeSobrenomeCliente()
    {
        return $this->nmeSobrenomeCliente;
    }

    /**
     * Set dtaNascCliente
     *
     * @param string $dtaNascCliente
     *
     * @return Cliente
     */
    public function setDtaNascCliente($dtaNascCliente)
    {
        $this->dtaNascCliente = $dtaNascCliente;

        return $this;
    }

    /**
     * Get dtaNascCliente
     *
     * @return string
     */
    public function getDtaNascCliente()
    {
        return $this->dtaNascCliente;
    }

    /**
     * Set emlCliente
     *
     * @param string $emlCliente
     *
     * @return Cliente
     */
    public function setEmlCliente($emlCliente)
    {
        $this->emlCliente = $emlCliente;

        return $this;
    }

    /**
     * Get emlCliente
     *
     * @return string
     */
    public function getEmlCliente()
    {
        return $this->emlCliente;
    }

    /**
     * Set endCliente
     *
     * @param string $endCliente
     *
     * @return Cliente
     */
    public function setEndCliente($endCliente)
    {
        $this->endCliente = $endCliente;

        return $this;
    }

    /**
     * Get endCliente
     *
     * @return string
     */
    public function getEndCliente()
    {
        return $this->endCliente;
    }

    /**
     * Set telCliente
     *
     * @param string $telCliente
     *
     * @return Cliente
     */
    public function setTelCliente($telCliente)
    {
        $this->telCliente = $telCliente;

        return $this;
    }

    /**
     * Get telCliente
     *
     * @return string
     */
    public function getTelCliente()
    {
        return $this->telCliente;
    }

    /**
     * Set cpfCliente
     *
     * @param string $cpfCliente
     *
     * @return Cliente
     */
    public function setCpfCliente($cpfCliente)
    {
        $this->cpfCliente = $cpfCliente;

        return $this;
    }

    /**
     * Get cpfCliente
     *
     * @return string
     */
    public function getCpfCliente()
    {
        return $this->cpfCliente;
    }

    /**
     * Set rgCliente
     *
     * @param string $rgCliente
     *
     * @return Cliente
     */
    public function setRgCliente($rgCliente)
    {
        $this->rgCliente = $rgCliente;

        return $this;
    }

    /**
     * Get rgCliente
     *
     * @return string
     */
    public function getRgCliente()
    {
        return $this->rgCliente;
    }

    /**
     * Set pwdCliente
     *
     * @param string $pwdCliente
     *
     * @return Cliente
     */
    public function setPassword($pwdCliente)
    {
        $this->pwdCliente = $pwdCliente;

        return $this;
    }

    /**
     * Get pwdCliente
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->pwdCliente;
    }

    /**
     * Get idCliente
     *
     * @return integer
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    private $isActive;

    public function __construct()
    {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid('', true));
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->idCliente,
            $this->nomeCliente,
            $this->nmeSobrenomeCliente,
            $this->pwdCliente,
            $this->cpfCliente,
            $this->dtaNascCliente,
            $this->emlCliente,
            $this->endCliente,
            $this->telCliente,
            $this->rgCliente,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->idCliente,
            $this->nomeCliente,
            $this->nmeSobrenomeCliente,
            $this->pwdCliente,
            $this->cpfCliente,
            $this->dtaNascCliente,
            $this->emlCliente,
            $this->endCliente,
            $this->telCliente,
            $this->rgCliente,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized, array('allowed_classes' => false));
    }
}
