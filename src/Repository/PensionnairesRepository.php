<?php

namespace App\Repository;

use App\Entity\Pensionnaires;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pensionnaires>
 *
 * @method Pensionnaires|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pensionnaires|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pensionnaires[]    findAll()
 * @method Pensionnaires[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PensionnairesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pensionnaires::class);
    }

//    /**
//     * @return Pensionnaires[] Returns an array of Pensionnaires objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Pensionnaires
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
