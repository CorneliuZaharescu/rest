<?php

namespace App\Repository;
use App\Entities\Jobs;
use Doctrine\ORM\EntityManager;

class JobsRepository {

    private $class = Jobs::class; #'App\Entities\Cities'

    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getAll()
    {
        return $this->em->getRepository($this->class)->findAll();
    }

    public function getById($id)
    {
        return $this->em->getRepository($this->class)->findBy([
            'id' => $id
        ]);
    }

    public function search($obj) {
        /**
        * Entiti one to one problem
        */
        return $this->em->getRepository($this->class)->createQueryBuilder('o')
//            ->where('o.category_id = :category_id')
//            ->andWhere('o.city_id = :city_id')
            ->andWhere('o.created_at BETWEEN :start_date AND :end_date')
            ->andWhere('o.job_description LIKE :keyword')
//            ->setParameter('category_id', $obj["category_id"])
//            ->setParameter('city_id', $obj["city_id"])
            ->setParameter('start_date', $obj["start_date"])
            ->setParameter('end_date', $obj["end_date"])
            ->setParameter('keyword', '%'. $obj["keyword"]. '%')
            ->getQuery()
            ->getResult();
    }
}
