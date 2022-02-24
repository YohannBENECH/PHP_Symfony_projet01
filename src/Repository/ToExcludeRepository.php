<?php

namespace App\Repository;

use App\Entity\ToExclude;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ToExclude|null find($id, $lockMode = null, $lockVersion = null)
 * @method ToExclude|null findOneBy(array $criteria, array $orderBy = null)
 * @method ToExclude[]    findAll()
 * @method ToExclude[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ToExcludeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ToExclude::class);
    }

    // /**
    //  * @return ToExclude[] Returns an array of ToExclude objects
    //  */
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
    public function findOneBySomeField($value): ?ToExclude
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
