<?php

namespace App\Models;

class Volunteer extends \App\Core\Model
{   public function __construct(
    public int $id = 0,
    public ?string $firstName = "",
    public ?string $lastName = "",
    public ?string $email = "",
    public ?string $nickname = "",
    public ?string $location = "",
    public ?string $password = "",
    public ?string $fosterCare = "",
)
    {

    }


    static public function setDbColumns()
    {
        return ['id', 'firstName', 'lastName', 'email', 'nickname','location', 'password', 'fosterCare' ];
    }

    static public function setTableName()
    {
        return "volunteer";
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @param string|null $location
     */
    public function setLocation(?string $location): void
    {
        $this->location = $location;
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
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * @param string|null $nickname
     */
    public function setNickname(?string $nickname): void
    {
        $this->nickname = $nickname;
    }

    /**
     * @return string|null
     */
    public function getFosterCare(): ?string
    {
        return $this->fosterCare;
    }

    /**
     * @param string|null $fosterCare
     */
    public function setFosterCare(?string $fosterCare): void
    {
        $this->fosterCare = $fosterCare;
    }
}