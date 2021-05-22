<?php

namespace App\Club\Service;
use App\Club\Model\ClubRequest;
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

    public function createClub(ClubRequest $clubRequest){
        echo sprintf("Club created");
    }

    public function getClub($id) {
        echo sprintf("getClub: ".$id);
    }

    public function isClubExists($id) {
        return $this->clubRepository->isClubExists($id);
    }
    public function updateClub($id, ClubRequest $clubRequest){
        //TODO pobranie wpisu z bazy danych o danym ID. Uaktualnienie danych pobranego wpisu danymi z requestu. Zapisanie wpisu/encjim etodą save z repozytoruim i zwrócenie jej wyniku.
    }
}