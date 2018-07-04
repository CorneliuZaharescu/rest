<?php

namespace App\Entities;

use Doctrine\ORM\Mapping AS ORM;

/**
 * Jobs
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="jobs")
 */
class Jobs
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    public $company_name;
    /**
     * @ORM\Column(type="text")
     */
    public $company_description;
    /**
     * @ORM\Column(type="string", length=128)
     */
    public $company_email;
    /**
     * @ORM\Column(type="string", length=50)
     */
    public $company_phone;
    /**
     * @ORM\Column(type="string", length=255)
     */
    public $job_title;
    /**
     * @ORM\Column(type="text")
     */
    public $job_description;

    /**
     * @ORM\Column(type="text")
     */
    public $created_at;
//    /**
//     * @ORM\@OneToOne(targetEntity="Categories")
//     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
//     */
//    public $category_id;
//    /**
//     * @ORM\city_id
//     * @ORM\OneToOne(targetEntity="Cities")
//     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
//     */
//    public $city_id;

}
