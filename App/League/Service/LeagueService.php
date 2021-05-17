<?php

namespace App\League\Service;
use App\League\Model\LeagueRequest;
use App\League\Repository\LeagueRepository;
use App\League\Entity\LeagueEntity;

class LeagueService
{
    private $leagueRepository;

    /**
     * NationalityService constructor.
     */
    public function __construct() {
        $this->leagueRepository = new LeagueRepository();
    }

    public function createLeague(LeagueRequest $leagueRequest){
        echo sprintf("League created");
    }

    public function getLeague($id) {
        echo sprintf("getLeague: ".$id);
    }

    public function isLeagueExists($id) {
        return $this->leagueRepository->isLeagueExists($id);
    }

    public function updateLeague($id, LeagueRequest $leagueRequest){
        //TODO pobranie wpisu z bazy danych o danym ID. Uaktualnienie danych pobranego wpisu danymi z requestu. Zapisanie wpisu/encjim etodą save z repozytoruim i zwrócenie jej wyniku.
    }

}