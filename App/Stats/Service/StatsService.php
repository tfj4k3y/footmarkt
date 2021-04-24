<?php

namespace App\Stats\Service;
use App\Stats\Repository\StatsRepository;
use App\Stats\Entity\StatsEntity;

class StatsService
{
    private $statsRepository;

    /**
     * StatsService constructor.
     */
    public function __construct() {
        $this->statsRepository = new StatsRepository();
    }

    public function createStats(StatsEntity $statsEntity){
        echo sprintf("Stats created");
    }

    public function getStats($id) {
        echo sprintf("getStats: ".$id);
    }

    public function isNationalityExists($id) {
        return $this->statsRepository->isStatsExists($id);
    }
}