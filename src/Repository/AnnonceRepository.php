<?php

namespace App\Repository;

use App\Entity\Annonce;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr;

/**
 * @method Annonce|null find($id, $lockMode = null, $lockVersion = null)
 * @method Annonce|null findOneBy(array $criteria, array $orderBy = null)
 * @method Annonce[]    findAll()
 * @method Annonce[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnonceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Annonce::class);
    }

    // /**
    //  * @return Annonce[] Returns an array of Annonce objects
    //  */


    
    public function RechercherAnnonce($critere) //une requete faites a travers la fonction RechercherAnnonce avec en para la variable critere
    {
        return $this->createQueryBuilder('annonce') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
           // ->leftJoin('a.race', 'race') chercher comment faire une liaison a une autre table pour recherche des races
            //->Where('a.race = :race')
            //->setParameter('race', $critere['race'])
           ->Where('annonce.don = :don') // colonne don dans la table 'a' annonce
           ->setParameter('don', $critere['don'])
           ->andWhere(
           new Expr\Orx([ //permet de faire une double condition dans un where
            "annonce.prix IS NULL", //on demande d'afficher  les annonces si c'est null
            "annonce.prix > :Prix_mini", //on demade d'afficher les annonces superieure au prix indiqué en prix mini
        ])
    )
           ->setParameter('Prix_mini', $critere['Prix_mini'])
      
           ->andWhere(
            new Expr\Orx([//permet de faire une double condition dans un where
             "annonce.prix IS NULL",//on demande d'afficher  les annonces si c'est null
             "annonce.prix < :Prix_maximum",//on demade d'afficher les annonces superieure au prix indiqué en prix maxi
         ])
     )
           ->setParameter('Prix_maximum', $critere['Prix_maximum'])
           
            //->orderBy('a.id', 'ASC')
            //->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Annonce
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
