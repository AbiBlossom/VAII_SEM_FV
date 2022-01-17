<?php

namespace App\Models;

class Comment extends \App\Core\Model
{public function __construct(
    public int $id = 0,
    public ?string $text = "",
    public ?string $email = "",


)

{

}

    static public function setDbColumns()
    {
        return ['id', 'text', 'email'];
    }

    static public function setTableName()
    {
        return "comments";
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
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
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


}