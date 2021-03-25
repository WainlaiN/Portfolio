<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;


class Contact
{

    /**
     * @var string|null
     * @Assert\Length(min="3", max="255", minMessage="Au moins 3 caractères")
     * @Assert\NotBlank()
     */
    private ?string $name;

    /**
     * @var string|null
     * @Assert\Email()
     * @Assert\NotBlank()
     */
    private ?string $email;

    /**
     * @Assert\Length(min="3", max="255", minMessage="Au moins 3 caractères")
     * @Assert\NotBlank()
     *
     */
    private ?string $message;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }



}
