<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 */
#[ApiResource(mercure: true)]
#[ORM\Entity]
class BucketList
{
    /**
     * The entity ID
     */
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    /**
     * Name
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    public string $name = '';

    /**
     * Description
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    public string $description = '';

    /**
     * Date created at
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    public $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }
}
