<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(collectionOperations={"post"}, itemOperations={"get"})
 * @ORM\Entity()
 */
class Newspaper extends Artwork
{

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $periodicity;

    /**
     * @return int
     */
    public function getPeriodicity(): int
    {
        return $this->periodicity;
    }

    /**
     * @param int $periodicity
     */
    public function setPeriodicity(int $periodicity): void
    {
        $this->periodicity = $periodicity;
    }
}
