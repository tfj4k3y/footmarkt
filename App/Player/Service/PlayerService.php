<?php

namespace App\Player\Service;
use App\Player\Repository\PlayerRepository;
use App\Player\Entity\PlayerEntity;

class PlayerService
{
    private $playerRepository;

    /**
     * PlayerService constructor.
     */
    public function __construct() {
        $this->playerService = new PlayerService();
    }

    public function createPlayer(PlayerEntity $playerEntity){
        echo sprintf("Player created");
    }

    public function getPlayer($id) {
        echo sprintf("getPlayer: ".$id);
    }

    public function isPlayerExists($id) {
        return $this->playerRepository->isPlayerExists($id);
    }
}