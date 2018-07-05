<?php

namespace App\Repository;
use App\Entities\Categories;
use Doctrine\ORM\EntityManager;

class CategoriesRepository {

    private $class = Categories::class;

    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }


    public function create(Categories $post)
    {
        $this->em->persist($post);
        $this->em->flush();
    }

    public function update(Categories $post, $data)
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
        return new Categories($data);
    }
}
