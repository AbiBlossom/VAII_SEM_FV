<?php


namespace App\Models;

use App\Core\Model;

class Dog extends \App\Core\Model
{

    public function __construct(
        public int $id = 0,
        public int $shelter_id = 0,
        public ?string $name = "",
        public ?string $text = "",
        public ?string $image = "",
        public int $height = 0,
        public int $weight = 0,
        public int $age = 0,
        public ?string $gender = "",
        public ?string $breed = "",

    )

    {

    }

    static public function setDbColumns()
    {
        return ['id', 'shelter_id', 'name', 'text', 'image', 'height', 'weight', 'age', 'gender', 'breed'];
    }

    static public function setTableName()
    {
        return "dogs";
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
     * @return int
     */
    public function getShelterId(): int
    {
        return $this->shelter_id;
    }

    /**
     * @param int $shelter_id
     */
    public function setShelterId(int $shelter_id): void
    {
        $this->shelter_id = $shelter_id;
    }

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
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     */
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string|null
     */
    public function getBreed(): ?string
    {
        return $this->breed;
    }

    /**
     * @param string|null $breed
     */
    public function setBreed(?string $breed): void
    {
        $this->breed = $breed;
    }
}