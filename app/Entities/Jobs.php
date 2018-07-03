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
    protected $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $company_name;
    /**
     * @ORM\Column(type="text")
     */
    protected $company_description;
    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $company_email;
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $company_phone;
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $job_title;
    /**
     * @ORM\Column(type="text")
     */
    protected $job_description;
    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="categories")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    protected $category_id;
    /**
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="cities")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    protected $city_id;

}
