<?php

/**
 * This file is part of the Thiebaudet package.
 *
 * (c) thiebaudet.fr <thomas@thiebaudet.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tag appartenant à un article.
 *
 * @ORM\Entity(repositoryClass="App\Repository\TagRepository")
 */
class Tag
{
    /**
     * Id du tag.
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Nom du tag.
     *
     * @var string
     *
     * @ORM\Column(type="string", length=50, unique=true)
     *
     * @Assert\NotBlank()
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Tag
     */
    public function setName(string $name): Tag
    {
        $this->name = $name;
        return $this;
    }
}