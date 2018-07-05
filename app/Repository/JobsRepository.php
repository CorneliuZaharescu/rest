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

    public function search($obj)
    {

        $query = $this->em->getRepository($this->class)->createQueryBuilder('o')
            ->where('o.job_description LIKE :keyword')
            ->setParameter('keyword', '%'. $obj["keyword"]. '%');
        if ($obj["category_id"])
        {
            $query->andWhere('o.category = :category_id')->setParameter('category_id', $obj["category_id"]);
        }
        if ($obj["city_id"])
        {
            $query->andWhere('o.city = :city_id')->setParameter('city_id', $obj["city_id"]);
        }
        if ($obj["start_date"])
        {
            $query->andWhere('o.created_at > :start_date')->setParameter('start_date', $obj["start_date"]);
        }
        if ($obj["end_date"])
        {
            $query->andWhere('o.created_at < :end_date')->setParameter('end_date', $obj["end_date"]);
        }
        return $query->getQuery()->execute();
    }
}
