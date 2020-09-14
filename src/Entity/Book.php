<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(collectionOperations={"post"}, itemOperations={"get"})
 * @ORM\Entity()
 */
class Book extends Artwork
{

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @var integer
     * @ORM\Column(type="integer")
     */
    private $isbn;

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return int
     */
    public function getIsbn(): int
    {
        return $this->isbn;
    }

    /**
     * @param int $isbn
     */
    public function setIsbn(int $isbn): void
    {
        $this->isbn = $isbn;
    }
}
