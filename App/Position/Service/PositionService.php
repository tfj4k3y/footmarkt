<?php

namespace App\Position\Service;
use App\Position\Entity\PositionEntity;
use App\Position\Repository\PositionRepository;

class PositionService
{
    private $positionRepository;

    /**
     * PositionService constructor.
     */
    public function __construct() {
        $this->positionRepository = new PositionRepository();
    }

    public function createPosition(PositionEntity $positionEntity){
        echo sprintf("Position created");
    }

    public function getPosition($id) {
        echo sprintf("getPosition: ".$id);
    }

    public function isPositionExists($id): string
    {
        return $this->positionRepository->isPositionExists($id);
    }
}