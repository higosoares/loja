<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 10/09/2018
 * Time: 20:49
 */

namespace App\Repository\Cliente;
use App\Entity\Cliente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cliente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cliente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cliente[]    findAll()
 * @method Cliente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class ClienteRepository extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cliente::class);
    }

    /**
     *
     * @param int $id
     * @return Cliente
     */
    public function recupera($id)
    {
        $cliente = $this->find($id);
        return $cliente;
    }
}