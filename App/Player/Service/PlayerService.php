<?php

namespace App\Player\Service;
use App\Player\Model\PlayerRequest;
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

    public function createPlayer(PlayerRequest $playerRequest){
        echo sprintf("Player created");
    }

    public function getPlayer($id) {
        echo sprintf("getPlayer: ".$id);
    }

    public function updatePlayer($id, PlayerRequest $playerRequest){
        echo "test";
    }

    public function isPlayerExists($id) {
        return $this->playerRepository->isPlayerExists($id);
    }
}