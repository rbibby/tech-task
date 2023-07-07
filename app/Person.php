<?php

namespace App;

class Person
{
    public function __construct(
       protected ?string $title,
       protected ?string $firstName,
       protected ?string $lastName
    ) {
    }

    public function toArray(): array
    {
        return [
            'title' => $this->title,
            'first_name' => strlen($this->firstName) != 1 ? $this->firstName : null,
            'initial' => strlen($this->firstName) == 1 ? $this->firstName : null,
            'last_name' => $this->lastName,
        ];
    }
}
