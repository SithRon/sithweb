<?php

namespace App\Repository;

use App\Entity\ImgContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImgContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImgContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImgContact[]    findAll()
 * @method ImgContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImgContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImgContact::class);
    }

    // /**
    //  * @return ImgContact[] Returns an array of ImgContact objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImgContact
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
