<?php
namespace App\Repository;

use App\Entity\Ponente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PonenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ponente::class);
    }

    public function deleteBySubactividad($subactividadId)
    {
        return $this->createQueryBuilder('p')
            ->delete()
            ->where('p.subactividad = :subactividadId')
            ->setParameter('subactividadId', $subactividadId)
            ->getQuery()
            ->execute();
    }
}
