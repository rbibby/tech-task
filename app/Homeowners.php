<?php

namespace App;

class Homeowners
{
    public function __construct(protected string $homeowners)
    {
    }

    public function convertToPeople(): array
    {
        $parts = explode(' ', static::standardiseCharacters($this->homeowners));

        if (count($parts) == 3) {
            return [
                (new Person($parts[0], $parts[1], $parts[2]))->toArray(),
            ];
        }

        if (count($parts) == 4) {
            return [
                (new Person($parts[0], null, $parts[3]))->toArray(),
                (new Person($parts[2], null, $parts[3]))->toArray(),
            ];
        }

        if (count($parts) == 5) {
            return [
                (new Person($parts[0], $parts[3], $parts[4]))->toArray(),
                (new Person($parts[2], null, $parts[4]))->toArray(),
            ];
        }

        if (count($parts) == 7) {
            return [
                (new Person($parts[0], $parts[1], $parts[2]))->toArray(),
                (new Person($parts[4], $parts[5], $parts[6]))->toArray(),
            ];
        }

        return [];
    }

    private static function standardiseCharacters($homeowners)
    {
        return str_replace(
            ['.', '&'],
            ['', 'and'],
            $homeowners
        );
    }
}
