<?php

namespace App\Club\Service;
use App\Club\Repository\ClubRepository;
use App\Club\Entity\ClubEntity;

class ClubService
{
    private $clubRepository;

    /**
     * ClubService constructor.
     */
    public function __construct() {
        $this->clubRepository = new ClubRepository();
    }

    public function createClub(ClubEntity $clubEntity){
        echo sprintf("Club created");
    }

    public function getClub($id) {
        echo sprintf("getClub: ".$id);
    }

    public function isClubExists($id) {
        return $this->clubRepository->isClubExists($id);
    }
}