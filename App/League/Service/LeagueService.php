<?php

namespace App\League\Service;
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

    public function createLeague(LeagueEntity $leagueEntity){
        echo sprintf("League created");
    }

    public function getLeague($id) {
        echo sprintf("getLeague: ".$id);
    }

    public function isLeagueExists($id) {
        return $this->leagueRepository->isLeagueExists($id);
    }
}