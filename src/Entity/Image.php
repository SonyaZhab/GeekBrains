<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $server_adr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServerAdr(): ?string
    {
        return $this->server_adr;
    }

    public function setServerAdr(string $server_adr): self
    {
        $this->server_adr = $server_adr;

        return $this;
    }

    public function getImgName(): ?string
    {
        return $this->img_name;
    }

    public function setImgName(string $img_name): self
    {
        $this->img_name = $img_name;

        return $this;
    }
}
