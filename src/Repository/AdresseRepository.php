<?php

namespace App\Repository;

use App\Entity\Adresse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Adresse|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adresse|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adresse[]    findAll()
 * @method Adresse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdresseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adresse::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Adresse $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Adresse $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Adresse[] Returns an array of Adresse objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Adresse
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

<<<<<<< HEAD:src/Repository/AdresseRepository.php
    public function findByVille($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.ville = :val')
            ->setParameter('val', $value)
=======
    /**
     * @return Article[] Returns an array of Article objects
     */

    public function search($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.etat = :etat')
            ->setParameter('etat', "desarchive")
            ->andWhere('a.titre like :val')
            ->setParameter('val', '%'. $value.'%')
>>>>>>> 3ca17088e6b15fa8b1997d470b77f8774ec0a855:src/Repository/ArticleRepository.php
            ->getQuery()
            ->getResult()
            ;
    }
<<<<<<< HEAD:src/Repository/AdresseRepository.php

=======
>>>>>>> 3ca17088e6b15fa8b1997d470b77f8774ec0a855:src/Repository/ArticleRepository.php
}
