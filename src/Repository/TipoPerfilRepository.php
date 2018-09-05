<?php

namespace App\Repository;

use App\Entity\TipoPerfil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TipoPerfil|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoPerfil|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoPerfil[]    findAll()
 * @method TipoPerfil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoPerfilRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoPerfil::class);
    }

//    /**
//     * @return TipoPerfil[] Returns an array of TipoPerfil objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TipoPerfil
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
