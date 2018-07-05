<?php

namespace App\Repository;
use App\Entities\Jobs;
use Doctrine\ORM\EntityManager;

/**
 * TODO
 * Need implements standard logic flow (Doctrine pagination package) for pagination items
 */

class JobsRepository {

    private $class = Jobs::class;

    protected $perPage = 5;
    protected $offSet = 0;
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getById($id)
    {
        return $this->em->getRepository($this->class)->findBy([
            'id' => $id
        ]);
    }

    public function getAll($obj)
    {
        $this->offSet = ($obj['page'] * $this->perPage) - $this->perPage;
        if ($this->offSet < 0)
        {
            throw new \Exception("Page doesn't exist");
        }

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
        return $query->getQuery()->setFirstResult($this->offSet)->setMaxResults($this->perPage)->execute();
    }
}
