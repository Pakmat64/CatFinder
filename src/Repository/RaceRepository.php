<?php

namespace App\Repository;

use App\Entity\Race;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Race|null find($id, $lockMode = null, $lockVersion = null)
 * @method Race|null findOneBy(array $criteria, array $orderBy = null)
 * @method Race[]    findAll()
 * @method Race[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Race::class);
    }

    // /**
    //  * @return Race[] Returns an array of Race objects
    //  */
    

    public function RaceChatA()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'A%')
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatB()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'B%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatC()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'C%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatD()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'D%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatE()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'E%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatF()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'F%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatG()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'G%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatH()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'H%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatI()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'I%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatJ()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'J%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatK()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'K%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatL()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'L%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatM()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'M%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatN()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'N%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatO()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'O%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatP()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'P%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatQ()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'Q%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatR()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'R%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatS()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'S%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatT()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'T%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatU()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'U%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatV()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'V%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatW()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'W%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatX()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'X%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatY()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'Y%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }

    public function RaceChatZ()
    {
        return $this->createQueryBuilder('race') //table annonce, a.champtable ou annonce.champtable c'est un alias, on indique la table ciblé
        ->Where('race.libelle LIKE :libelle') // colonne don dans la table 'a' annonce
        ->setParameter('libelle', 'Z%') //récupére les races de chats débutant par la lettre B
        ->getQuery()
        ->getResult();
    ;

    }
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Race
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
