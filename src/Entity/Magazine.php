<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(collectionOperations={"post"}, itemOperations={"get"})
 * @ORM\Entity()
 */
class Magazine extends Artwork
{

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $collection;

    /**
     * @return string
     */
    public function getCollection(): string
    {
        return $this->collection;
    }

    /**
     * @param string $collection
     */
    public function setCollection(string $collection): void
    {
        $this->collection = $collection;
    }
}
