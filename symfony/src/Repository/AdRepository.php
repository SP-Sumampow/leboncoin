<?php

namespace App\Repository;

use App\Entity\Ad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Integer;

/**
 * @method Ad|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ad|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ad[]    findAll()
 * @method Ad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ad::class);
    }

    public function findAllAdForCategoryId(string $categoryId)
    {
        return $this->createQueryBuilder('a')
            ->innerJoin('a.tags', 't')
            ->where('t.id = :categoryId')
            ->setParameter('categoryId', $categoryId)
            ->getQuery()
            ->getResult();
    }

    public function searchAd(string $searchAd)
    {
        return $this->createQueryBuilder('a')
            ->where('a.title LIKE :title')
            ->setParameter('title', '%' . $searchAd . '%')
            ->getQuery()
            ->getResult();
    }

    public function lastAdArrived(int $limit)
    {
        return $this->createQueryBuilder('a')
            ->setMaxResults($limit)
            ->addOrderBy("a.id", "DESC")
            ->getQuery()
            ->getResult();
    }
}
