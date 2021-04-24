<?php

namespace App\Nationality\Service;
use App\Nationality\Repository\NationalityRepository;
use App\Nationality\Entity\NationalityEntity;

class NationalityService
{
    private $nationalityRepository;

    /**
     * NationalityService constructor.
     */
    public function __construct() {
        $this->nationalityRepository = new NationalityRepository();
    }

    public function createNationality(NationalityEntity $nationalityEntity){
        echo sprintf("Nationality created");
    }

    public function getNationality($id) {
        echo sprintf("getNationality: ".$id);
    }

    public function isNationalityExists($id) {
        return $this->nationalityRepository->isNationalityExists($id);
    }
}