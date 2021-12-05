<?php

namespace App\Repository;

use App\Entity\MatiereId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MatiereId|null find($id, $lockMode = null, $lockVersion = null)
 * @method MatiereId|null findOneBy(array $criteria, array $orderBy = null)
 * @method MatiereId[]    findAll()
 * @method MatiereId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatiereIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MatiereId::class);
    }

    // /**
    //  * @return MatiereId[] Returns an array of MatiereId objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MatiereId
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
