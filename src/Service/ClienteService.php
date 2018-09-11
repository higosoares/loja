<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 10/09/2018
 * Time: 20:48
 */

namespace App\Service;

use App\Entity\Cliente;
use App\Repository\ClienteRepository;
use Doctrine\ORM\EntityManagerInterface;

class ClienteService
{
    /**
     * @var ClienteRepository
     */
    protected $clienteRepository;

    public function __construct(ClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;

    }

    /**
     * Cadastrar cliente
     * @param array $params
     * @return Cliente
     */
    public function cadastrar($params, $entityManager)
    {
        $cliente = new Cliente();
        $cliente->setUsername($params->nome_cliente);
        $cliente->setNmeSobrenomeCliente($params->nme_sobrenome_cliente);
        $cliente->setDtaNascCliente($params->dta_nasc_cliente);
        $cliente->setEmlCliente($params->eml_cliente);
        $cliente->setEndCliente($params->end_cliente);
        $cliente->setTelCliente($params->tel_cliente);
        $cliente->setCpfCliente($params->cpf_cliente);
        $cliente->setRgCliente($params->rg_cliente);
        $cliente->setPassword($params->pwd_cliente);

        $entityManager->persist($cliente);
        $entityManager->flush();
        return $cliente;
    }

    /**
     * Editar cliente
     * @param array $params
     * @return Cliente
     */
    public function editar($id, $params, $entityManager)
    {
        $cliente = $this->recuperarPorId((int) $id);
        $cliente->setUsername($params->nome_cliente);
        $cliente->setNmeSobrenomeCliente($params->nme_sobrenome_cliente);
        $cliente->setDtaNascCliente($params->dta_nasc_cliente);
        $cliente->setEmlCliente($params->eml_cliente);
        $cliente->setEndCliente($params->end_cliente);
        $cliente->setTelCliente($params->tel_cliente);
        $cliente->setCpfCliente($params->cpf_cliente);
        $cliente->setRgCliente($params->rg_cliente);
        $cliente->setPassword($params->pwd_cliente);

        $entityManager->flush();
        return $cliente;
    }

    /**
     * Recuperar cliente por id
     * @param int $id
     * @return Cliente
     */
    public function recuperarPorId($id): Cliente
    {
        $cliente = $this->clienteRepository->recupera($id);
        return $cliente;
    }

}