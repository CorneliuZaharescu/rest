<?php

namespace App\Repository;
use App\Entities\Cities;
use Doctrine\ORM\EntityManager;

class CitiesRepository {

    private $class = Cities::class; #'App\Entities\Cities'

    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }


    public function create(Cities $post)
    {
        $this->em->persist($post);
        $this->em->flush();
    }

    public function update(Cities $post, $data)
    {
        $post->setName($data['name']);
        $this->em->persist($post);
        $this->em->flush();
    }

    public function getAll()
    {
        return $this->em->getRepository($this->class)->findAll();
    }

    public function getById($id)
    {
        return $this->em->getRepository($this->class)->findOneBy([
            'id' => $id
        ]);
    }

    public function delete(Categories $post)
    {
        $this->em->remove($post);
        $this->em->flush();
    }

    private function prepareData($data)
    {
        return new Cities($data);
    }
}
